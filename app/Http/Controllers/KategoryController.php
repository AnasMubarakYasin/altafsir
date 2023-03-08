<?php

namespace App\Http\Controllers;

use App\Models\Kategory;
use App\Http\Requests\StoreKategoryRequest;
use App\Http\Requests\UpdateKategoryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class KategoryController extends Controller
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
    public function create_api(StoreKategoryRequest $request)
    {
        $data = $request->validated();
        $kategory = Kategory::create($data);
        return response()->json($kategory);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategory $kategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategory $kategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoryRequest $request, Kategory $kategory)
    {
        $data = $request->validated();
        $kategory->update($data);
        return response()->json($kategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete()
    {
        $request = request();
        if ($request->has('all')) {
            Kategory::truncate();
        } else {
            Kategory::destroy($request->input('id', []));
        }
        return response()->json();
    }
}
