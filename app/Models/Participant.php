<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        "sweepstake_id",
        "name",
        "email"
    ];

    protected $dates = [
        "awarded_at"
    ];

    protected $dateFormat = "d/m/Y";

    public function sweepstake() {
        return $this->belongsTo(Sweepstake::class);
    }
}
