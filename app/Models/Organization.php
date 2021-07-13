<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    /**
     * The users that are apart of the organization.
     */
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
