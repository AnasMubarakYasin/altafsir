<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tafsir extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'text',
        "ayat_id",
    ];
    protected $hidden = [];
    protected $casts = [];
    public function ayat()
    {
        return $this->belongsTo(Ayat::class, 'ayat_id');
    }
}
