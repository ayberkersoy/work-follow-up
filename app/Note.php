<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['discovery_id', 'note_category_id', 'content'];

    public function category()
    {
        return $this->hasMany(NoteCategory::class);
    }

    public function usernote()
    {
        return $this->hasMany(UserNote::class);
    }
}