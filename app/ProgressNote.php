<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressNote extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function to_user()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }

    public function completed()
    {
        return $this->belongsTo(User::class, 'completed_by');
    }

    public function category()
    {
        return $this->belongsTo(NoteCategory::class, 'note_category_id');
    }

    public function note()
    {
        return $this->belongsTo(Progress::class, 'discovery_content_id', 'id');
    }
}
