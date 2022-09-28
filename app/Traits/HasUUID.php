<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

trait HasUUID
{
    public static function bootHasUUID() {
        static::creating(function(Model $model) {
            if (empty($model->id)) {
                $model->id = Str::uuid();
                $model->user_id = Auth::user()->id;
            }
        });
    }
}
