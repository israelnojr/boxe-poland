<?php

namespace boxe;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $guarded = [];
    
    public function shippment()
    {
        return $this->belongsTo(shippment::class);
    }

    public function user()
    {
        return $this->blongsTo(User::class);
    }
}
