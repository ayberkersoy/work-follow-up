<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['project_id', 'file_path', 'file_name'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
