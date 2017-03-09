<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
