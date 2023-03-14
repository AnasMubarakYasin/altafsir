<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [];
    protected $casts = [];

    public function ayats()
    {
        // return $this->hasMany(Ayat::class, 'kategorie_id');
        return $this->belongsToMany(Ayat::class);
    }
}
