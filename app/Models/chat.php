<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;
    protected $table = 'chat';
    protected $timestamps = false;
    protected $primarykey = 'user_id';

    protected $fillable=['user_id','situation','created_at','updated_at'];


    protected $hidden=[
        'created_at',
        'updated_at'
    ];    




}
