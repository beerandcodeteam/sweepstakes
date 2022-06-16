<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sweepstake extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "number_of_winners",
        "end_date",
        "description"
    ];

    protected $keyType = "string";

    public $incrementing = false;

    public static function boot() {
        parent::boot();

        static::creating(function(Model $model) {
            if (empty($model->id)) {
                $model->id = Str::uuid();
            }
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
