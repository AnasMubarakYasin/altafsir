<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAyatRequest;
use App\Http\Requests\UpdateAyatRequest;
use App\Models\Ayat;

class AyatController extends Controller
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
    public function store(StoreAyatRequest $request)
    {
        $data = $request->validated();
        $surah = Ayat::create($data);
        return response()->json($surah);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ayat $ayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ayat $ayat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAyatRequest $request, Ayat $ayat)
    {
        $data = $request->validated();
        $ayat->update($data);
        return response()->json($ayat);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete()
    {
        $request = request();
        if ($request->has('all')) {
            Ayat::truncate();
        } else {
            Ayat::destroy($request->input('id', []));
        }
        return response()->json();
    }
}
