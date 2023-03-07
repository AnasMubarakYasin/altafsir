<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayat extends Model
{
    use HasFactory;

    protected $fillable = [
        "number",
        "text_id",
        "text_arab",
        "text_latin",
        "audios",
        "surah_id",
    ];
    protected $hidden = [];
    protected $casts = [
        'audios' => 'array'
    ];
    public function surah()
    {
        return $this->belongsTo(Surah::class, 'surah_id');
    }
    public function tafsir()
    {
        return $this->hasOne(Tafsir::class);
    }
}
