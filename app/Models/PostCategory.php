<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $guarded = [

    ];

    public function url(){
        return route('danh-muc-bai-viet', [
            'slug' => $this->slug,
            'id' => $this->id,
        ]);
    }

    public function getChildrenIds(){
        $retval = [$this->id];
        $children = Category::where('category_id', $this->id)->get();
        foreach ($children as $item) {
            $retval[] = $item->id;
        }
        return $retval;
    }

}
