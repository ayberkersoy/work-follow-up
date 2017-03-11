<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discovery extends Model
{
    protected $fillable = ['dis_category_id', 'project_id', 'job', 'description', 'amount', 'unit', 'unit_price'];

    public function category()
    {
        return $this->hasMany(DisCategory::class);
    }
}
