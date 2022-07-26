<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sweepstake extends Model
{
    use HasFactory, HasUUID;

    protected $fillable = [
        "user_id",
        "number_of_winners",
        "end_date",
        "description"
    ];

    protected $keyType = "string";

    public $incrementing = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function participants() {
        return $this->hasMany(Participant::class);
    }
}
