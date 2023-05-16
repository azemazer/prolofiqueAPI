<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;
use App\Http\Resources\SongResource;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Songs::all();
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
    public function store(Request $request)
    {
        $song_title = $request->input('title');
        $song_description = $request->input('description');
        $song_length = $request->input('length');
        $song_price = $request->input('price');
        $song_date = $request->input('date');
        $song_url = $request->input('url');

        $song = Songs::create([
            'title' => $song_title,
            'price' => $song_price,
            'description' => $song_description,
            'length' => $song_length,
            'date' => $song_date,
            'url' => $song_url,
        ]);
        return response()->json([
            'data' => new SongResource($song)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Songs $song)
    {
        $song_title = $request->input('title');
        $song_description = $request->input('description');
        $song_length = $request->input('length');
        $song_price = $request->input('price');
        $song_date = $request->input('date');
        $song_url = $request->input('url');

        $song -> update([
            'title' => $song_title,
            'price' => $song_price,
            'description' => $song_description,
            'length' => $song_length,
            'date' => $song_date,
            'url' => $song_url,
        ]);
        return response()->json([
            'data' => new SongResource($song)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Songs $song)
    {
        $song->delete();
        return response()->json(null,204);
    }
}
