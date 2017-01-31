<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama','keterangan','path_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
