<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisCategory extends Model
{
    protected $fillable = ['name'];

    public function discovery()
    {
        return $this->belongsTo(Discovery::class, 'id', 'dis_category_id');
    }
}
