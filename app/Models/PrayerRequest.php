<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'content'
    ];

    /**
     * The group the prayer request belongs to.
     */
    public function group() {
        return $this->belongsTo(Group::class);
    }

    /**
     * The comments that belong to the prayer request.
     */
    public function comments() {
        return $this->hasMany(PrayerRequestComment::class);
    }
}
