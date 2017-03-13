<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteCategory extends Model
{
    protected $fillable = ['name'];

    public function note()
    {
        return $this->belongsTo(Note::class, 'id', 'note_category_id');
    }
}
