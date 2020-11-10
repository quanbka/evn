<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [
    ];

    public static function create(array $data)
    {
        // print_r($data); die;
        $data['slug'] = str_slug($data['name']);
        $user = static::query()->create($data);
        return $user;
    }

    public function update(array $attributes = [], array $options = [])
    {
        // print_r($attributes);
        if (! $this->exists) {
            return false;
        }
        $attributes['slug'] = str_slug($attributes['name']);

        return $this->fill($attributes)->save($options);
    }

    public function url(){
        return route('chi-tiet-bai-viet', [
            'slug' => $this->slug,
            'id' => $this->id,
        ]);
    }
}
