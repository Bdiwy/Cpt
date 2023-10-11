<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserR extends Model
{
    protected $table='user_r_s';

    use HasFactory,SoftDeletes;
    protected $guarded=[''];


    public function scopeTest($query) 
    {
        return $query->where('name','testtesttesttest')->where('email','testtest@gmail.com');
    }
}
