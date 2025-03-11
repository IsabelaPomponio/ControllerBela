<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebelaController extends Controller
{
    public function index()
    {
        // Dados falsos para o terceiro recurso
        $outros = [
            ['id' => 1, 'nome' => 'Outro 1'],
            ['id' => 2, 'nome' => 'Outro 2']
        ];

        return view('outros.index', compact('outros'));
    }

    public function show($id)
    {
        // Dados falsos de um único item
        $outro = ['id' => $id, 'nome' => "Outro $id"];

        return view('outros.show', compact('outro'));
    }

    public function create()
    {
        return view('outros.create');
    }

    public function store(Request $request)
    {
        // Aqui você salvaria no banco, mas vamos simular que foi criado.
        return redirect('/outros');
    }

    public function edit($id)
    {
        $outro = ['id' => $id, 'nome' => "Outro $id"];

        return view('outros.edit', compact('outro'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar (simulado)
        return redirect("/outros/$id");
    }

    public function destroy($id)
    {
        // Deletar (simulado)
        return redirect('/outros');
    }
}
