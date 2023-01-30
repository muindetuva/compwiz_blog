<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait FilterByUser
{
    public static function boot()
    {
        parent::boot();

        $user_id = Auth::id() ?? null;

        // Only add user_id if there's a logged in user
        if (Auth::hasUser()) {
            self::creating(function ($model) use ($user_id) {
                $model->user_id = $user_id;
            });
        }


        self::addGlobalScope('user', function (Builder $builder) use ($user_id) {
            $builder->where('user_id', $user_id);
        });
    }
}
