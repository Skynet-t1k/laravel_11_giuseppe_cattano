<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     * Ho trovato questo metodo per validare senza creare una nuova request spero che possa andar 
     * bene lo stesso
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('public/img');
            $validatedData['img'] = $imgPath;
        }

        Game::create($validatedData);

        return redirect()->route('games.index')->with('message', 'Review creata');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('games.index')->with('message', 'Review modificata');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('message', 'Review Cancellata');;
    }
}
