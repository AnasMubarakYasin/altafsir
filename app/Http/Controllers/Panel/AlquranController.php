<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Ayat;
use App\Models\Surah;
use App\Models\Tafsir;
use Illuminate\Http\Request;

class AlquranController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return inertia("Panel/Alquran/Index", [
            'data' => Surah::all()->load("ayats"),
        ]);
    }

    public function surah(Request $request)
    {
        return inertia("Panel/Alquran/Surah", [
            'data' => Surah::all(),
        ]);
    }
    public function ayat(Request $request)
    {
        return inertia("Panel/Alquran/Ayat", [
            'data' => Ayat::all(),
        ]);
    }
    public function tafsir(Request $request)
    {
        return inertia("Panel/Alquran/Tafsir", [
            'data' => Tafsir::all(),
        ]);
    }
}
