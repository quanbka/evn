<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
      'category', 'getChildrenCategories', 'getChildenProducts', 'getChildenProducts'
      
    ];

    public function url(){
        return route('danh-muc-san-pham', [
            'slug' => $this->slug,
            'id' => $this->id,
        ]);
    }


    public static function create(array $data)
    {
        $data['slug'] = str_slug($data['name']);
        $user = static::query()->create($data);
        return $user;
    }

    public function update(array $attributes = [], array $options = [])
    {
        if (! $this->exists) {
            return false;
        }
        $attributes['slug'] = str_slug($attributes['name']);

        return $this->fill($attributes)->save($options);
    }

    public function countProduct(){
        return $this->getChildenProducts()->count();
    }

    public function products () {
        return $this->belongsToMany('App\Models\Product');
    }

    public function getChildenProducts () {
        $ids = [$this->id];
        $childrenCategories = $this->getChildrenCategories()->get();
        foreach ($childrenCategories as $category) {
            $ids[] = $category->id;
        }
        return \App\Models\Product::join('category_product', 'products.id', '=', 'product_id')
            ->select(\DB::raw('products.*, category_product.category_id'))
            ->whereIn('category_product.category_id', $ids);
    }

    public function getChildrenCategories () {
        return $this->hasMany('App\Models\Category');
    }

    public function category () {
        return $this->belongsTo('App\Models\Category');
    }

}
