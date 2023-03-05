<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSurahRequest;
use App\Http\Requests\UpdateSurahRequest;
use App\Models\Surah;

class SurahController extends Controller
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
    public function store(StoreSurahRequest $request)
    {
        $data = $request->validated();
        $surah = Surah::create($data);
        return response()->json($surah);
    }

    /**
     * Display the specified resource.
     */
    public function show(Surah $surah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surah $surah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurahRequest $request, Surah $surah)
    {
        $data = $request->validated();
        $surah->update($data);
        return response()->json($surah);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete()
    {
        $request = request();
        if ($request->has('all')) {
            Surah::truncate();
        } else {
            Surah::destroy($request->input('id', []));
        }
        return response()->json();
    }
}
