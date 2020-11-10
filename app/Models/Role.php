<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

use Illuminate\Database\Eloquent\Model;

class Role extends EntrustRole
{
    protected $fillable = [
        'name', 'display_name', 'description'
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }
}
