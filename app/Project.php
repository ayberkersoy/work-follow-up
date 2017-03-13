<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['firm_name', 'project_name', 'address', 'authorized', 'start_date', 'end_date'];
    public function contract()
    {
        return $this->hasMany(Contract::class);
    }

    public function discovery()
    {
        return $this->hasMany(Discovery::class);
    }
}
