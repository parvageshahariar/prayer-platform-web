<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description'
    ];


    /**
     * The users that are apart of the organization.
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * The groups that belong to the organization.
     */
    public function groups() {
        return $this->hasMany(Group::class);
    }
}
