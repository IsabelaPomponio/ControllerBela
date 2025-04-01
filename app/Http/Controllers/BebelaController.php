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

    public function show(string $id)
    {
        if (!$bebela = Bebela::find($id)) {
            return redirect()->route('bebela.index');
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

        return redirect()->route('bebelas');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!$bebela = Bebela::find($id)) {
            return redirect()->route('bebelas');
        }

        return view('bebelas.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!$category = Bebela::find($id)) {
            return redirect()->route('bebelas');
        }

        $data = $request->all();

        $category->update($data);

        return redirect()->route('bebelas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$category = Bebela::find($id)) {
            return redirect()->route('bebelas');
        }

        $category->delete();

        return redirect()->route('bebelas');
    }
}