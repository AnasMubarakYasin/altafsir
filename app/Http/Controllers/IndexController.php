<?php

namespace App\Http\Controllers;

use App\Models\Ayat;
use App\Models\Kategory;
use App\Models\Searcher;
use App\Models\Surah;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return inertia('Index', [
            'data' => Surah::all(),
        ]);
    }

    public function result(Request $request)
    {
        $keyword = $request->search;
        Searcher::log($keyword);
        $result = Kategory::whereFullText("name", $keyword)->first()->load("ayats")->load("ayats.surah");
        return inertia('Result', [
            'data' => $result,
            'result' => $keyword
        ]);
    }

    public function detail_surah(Surah $surah)
    {
        return inertia('DetailSurah', [
            'data' => $surah->ayats()->get(),
            'surah' => $surah
        ]);
    }

    public function detail_tafsir(Request $request)
    {
        return inertia('DetailTafsir');
    }
}
