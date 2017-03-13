<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['discovery_id', 'note_category_id', 'content'];

    public function category()
    {
        return $this->belongsTo(NoteCategory::class, 'note_category_id', 'id');
    }

    public function usernote()
    {
        return $this->hasMany(UserNote::class);
    }
}
