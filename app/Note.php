<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['note'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Resumen limitado del contenido de la nota
     * 
     * @return string
     */
    public function getSummaryAttribute()
    {
        return str_limit($this->note, config('notes.summary_length_limit'));
    }
}
