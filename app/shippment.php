<?php

namespace boxe;

use auth;
use Illuminate\Database\Eloquent\Model;

class shippment extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created( function($shippment){
            $shippment->info()->create([
                'trackId' => $shippment->key,
                'user_id' => auth::id()
            ]);

        });
    }
    public function info()
    {
        return $this->hasMany(info::class);
    }

    public function user()
    {
        return $this->blongsTo(User::class);
    }
}
