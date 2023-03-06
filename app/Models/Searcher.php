<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searcher extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $hidden = [];
    protected $casts = [];
    static function today()
    {
        $today = today()->setTime(0, 0);
        $tomorrow = today()->setTime(0, 0)->addDay();
        return Searcher::whereBetween('created_at', [$today, $tomorrow])->get();
    }
    static function yesterday()
    {
        $yesterday = today()->subDay()->setTime(0, 0);
        $today = today()->setTime(0, 0);
        return Searcher::whereBetween('created_at', [$yesterday, $today])->get();
    }
    static function log(string $text)
    {
        return Searcher::create([
            'text' => $text
        ]);
    }
}
