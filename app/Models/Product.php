<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
    ];

    public static function create(array $data)
    {
        $data['slug'] = str_slug($data['name']);
        $attributes = $data;
        unset($data['categories']);
        $user = static::query()->create($data);
        $user->categories()->detach();
        foreach ($attributes['categories'] as $category) {
            try {
                $user->categories()->attach($category['id']);
            } catch (\Exception $e) {

            }
        }

        return $user;
    }

    public function update(array $attributes = [], array $options = [])
    {
        if (! $this->exists) {
            return false;
        }
        $attributes['slug'] = str_slug($attributes['name']);
        $this->categories()->detach();
        foreach ($attributes['categories'] as $category) {
            try {
                $this->categories()->attach($category['id']);
            } catch (\Exception $e) {

            }
        }
        unset($attributes['categories']);

        return $this->fill($attributes)->save($options);
    }

    public function url(){
        return route('chi-tiet-san-pham', [
            'slug' => $this->slug?$this->slug:"-",
            'id' => $this->id,
        ]);
    }

    public function categories () {
        return $this->belongsToMany('App\Models\Category');
    }

    public static function search ($keyword) {
        return \App\Models\Product
            ::select('*')
            ->where('name', 'like', "%$keyword%");

    }

}
