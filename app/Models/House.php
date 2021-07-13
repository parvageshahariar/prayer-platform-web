<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    /**
     * The users in a house.
     */
    public function users() {
        return $this->belongsToMany(User::class);
    }

    /**
     * The organization the house belongs to.
     */
    public function organization() {
        return $this->belongsTo(Organization::class);
    }
}
