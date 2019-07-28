<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'isActive'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function companies()
    {
        return $this->belongsToMany(Company::class,'company_user');
    }
}
