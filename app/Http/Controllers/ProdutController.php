<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Dados falsos de produtos
        $produtos = [
            ['id' => 1, 'nome' => 'Produto 1', 'preco' => 10.00],
            ['id' => 2, 'nome' => 'Produto 2', 'preco' => 20.00]
        ];
        
        return view('produtos.index', compact('produtos'));
    }

    public function show($id)
    {
        // Dados falsos de um único produto
        $produto = ['id' => $id, 'nome' => "Produto $id", 'preco' => 10.00 * $id];

        return view('produtos.show', compact('produto'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Aqui você salvaria no banco, mas vamos simular que o produto foi criado.
        return redirect('/produtos');
    }

    public function edit($id)
    {
        $produto = ['id' => $id, 'nome' => "Produto $id", 'preco' => 10.00 * $id];
        
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar o produto (simulado)
        return redirect("/produtos/$id");
    }

    public function destroy($id)
    {
        // Deletar o produto (simulado)
        return redirect('/produtos');
    }
}

