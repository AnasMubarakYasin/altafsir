<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTafsirRequest;
use App\Http\Requests\UpdateTafsirRequest;
use App\Models\Tafsir;

class TafsirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTafsirRequest $request)
    {
        $data = $request->validated();
        $surah = Tafsir::create($data);
        return response()->json($surah);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tafsir $tafsir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tafsir $tafsir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTafsirRequest $request, Tafsir $tafsir)
    {
        $data = $request->validated();
        $tafsir->update($data);
        return response()->json($tafsir);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete()
    {
        $request = request();
        if ($request->has('all')) {
            Tafsir::truncate();
        } else {
            Tafsir::destroy($request->input('id', []));
        }
        return response()->json();
    }
}
