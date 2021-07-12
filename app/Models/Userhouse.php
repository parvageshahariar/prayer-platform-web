<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userhouse extends Model
{
    use HasFactory;
    protected $fillable = ['house_id','user_id','status'];
}
