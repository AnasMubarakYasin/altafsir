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
            'data' => Surah::all()->sortBy('number')->values(),
            'log' => Searcher::all(),
        ]);
    }

    public function result(Request $request)
    {
        $keyword = $request->search;
        if ($keyword) {
            Searcher::log($keyword);
        }
        $result = Kategory::with("ayats")->with("ayats.surah")->with("ayats.tafsir")->where('name', 'like', "%" . $keyword . "%")->first();
        return inertia('Result', [
            'data' => $result,
            'result' => $keyword,
            'log' => Searcher::all(),
        ]);
    }

    public function detail_surah(Surah $surah)
    {
        return inertia('DetailSurah', [
            'data' => $surah->ayats()->get()->sortBy('number')->values(),
            'surah' => $surah
        ]);
    }

    public function detail_tafsir(Ayat $ayat)
    {
        return inertia('DetailTafsir', [
            'surah' => $ayat->surah()->first(),
            'ayat' => $ayat,
            'tafsir' => $ayat->tafsir()->first()
        ]);
    }
}
