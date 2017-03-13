<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscoveryContent extends Model
{
    protected $fillable = ['discovery_id', 'job', 'description', 'amount', 'unit', 'unit_price'];

    public function discovery()
    {
        return $this->belongsTo(Discovery::class);
    }
}
