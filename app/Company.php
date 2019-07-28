<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'isActive'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function users()
    {
        return $this->belongsToMany(User::class,'company_user');
    }
}
