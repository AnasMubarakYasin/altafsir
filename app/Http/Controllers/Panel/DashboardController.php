<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Searcher;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return inertia('Panel/Dashboard', [
            'visitor' => [
                'today' => Visitor::today(),
                'yesterday' => Visitor::yesterday(),
            ],
            'searcher' => [
                'today' => Searcher::today(),
                'yesterday' => Searcher::yesterday(),
            ],
        ]);
    }
}
