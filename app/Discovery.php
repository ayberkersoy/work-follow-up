<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discovery extends Model
{
    protected $fillable = ['dis_category_id', 'project_id', 'job', 'description', 'amount', 'unit', 'unit_price', 'total'];

    public function category()
    {
        return $this->belongsTo(DisCategory::class, 'dis_category_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function content()
    {
        return $this->hasMany(DiscoveryContent::class);
    }
}
