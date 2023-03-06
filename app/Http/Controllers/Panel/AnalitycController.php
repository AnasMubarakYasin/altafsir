<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Searcher;
use App\Models\Visitor;
use Illuminate\Http\Request;

class AnalitycController extends Controller
{
    public function visitor()
    {
        return inertia("Panel/Analityc/Visitor", [
            'data' => Visitor::all(),
        ]);
    }
    public function searcher()
    {
        return inertia("Panel/Analityc/Searcher", [
            'data' => Searcher::all(),
        ]);
    }
}
