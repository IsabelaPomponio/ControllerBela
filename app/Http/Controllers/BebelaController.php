<?php

namespace App\Http\Controllers;

use App\Models\Bebela;
use Illuminate\Http\Request;

class BebelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bebelas = Bebela::all();
        return view('bebelas.index', compact('bebelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bebelas.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!$bebela = Bebela::find($id)) {
            return redirect()->route('bebelas.index');
        }
        return view('bebelas.show', compact('bebela'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:255'
        ]);

        Bebela::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('bebelas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!$bebela = Bebela::find($id)) {
            return redirect()->route('bebelas.index');
        }

        return view('bebelas.edit', compact('bebela'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!$bebela = Bebela::find($id)) {
            return redirect()->route('bebelas.index');
        }

        $data = $request->all();

        $bebela->update($data);

        return redirect()->route('bebelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$bebela = Bebela::find($id)) {
            return redirect()->route('bebelas.index');
        }

        $bebela->delete();

        return redirect()->route('bebelas.index');
    }
}