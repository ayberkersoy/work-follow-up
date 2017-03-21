<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $fillable = ['discovery_content_id', 'job', 'description', 'amount', 'unit', 'unit_price', 'total'];

    public function discovery()
    {
        return $this->belongsTo(DiscoveryContent::class);
    }

    public function note()
    {
        return $this->hasMany(ProgressNote::class);
    }
}
