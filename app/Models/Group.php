<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * The organization the group belongs to.
     */
    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    /**
     * The prayer requests that belong to the group.
     */
    public function prayerRequests() {
        return $this->hasMany(PrayerRequest::class);
    }
}
