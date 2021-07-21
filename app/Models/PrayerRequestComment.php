<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrayerRequestComment extends Model
{
    use HasFactory;

    /**
     * The prayer request the comment belongs to.
     */
    public function prayerRequest() {
        return $this->belongsTo(PrayerRequest::class);
    }
}
