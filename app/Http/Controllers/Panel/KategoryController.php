<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Ayat;
use App\Models\Kategory;
use App\Models\Surah;
use Illuminate\Http\Request;

class KategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        return inertia("Panel/Kategory/Index", [
            'data' => Kategory::all(),
            'ayat' => Ayat::all()
        ]);
    }
}
