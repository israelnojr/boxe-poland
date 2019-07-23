<?php

namespace boxe;

use Illuminate\Database\Eloquent\Model;

class shippment extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created( function($shippment){
            $shippment->info()->create([
                'trackId' => $shippment->key
            ]);

        });
    }
    public function info()
    {
        return $this->hasMany(Info::class);
    }
}
