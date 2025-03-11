<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Dados falsos de usuários
        $usuarios = [
            ['id' => 1, 'nome' => 'Usuário 1'],
            ['id' => 2, 'nome' => 'Usuário 2']
        ];

        return view('usuarios.index', compact('usuarios'));
    }

    public function show($id)
    {
        // Dados falsos de um único usuário
        $usuario = ['id' => $id, 'nome' => "Usuário $id"];

        return view('usuarios.show', compact('usuario'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // Aqui você salvaria no banco, mas vamos simular que o usuário foi criado.
        return redirect('/usuarios');
    }

    public function edit($id)
    {
        $usuario = ['id' => $id, 'nome' => "Usuário $id"];

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar o usuário (simulado)
        return redirect("/usuarios/$id");
    }

    public function destroy($id)
    {
        // Deletar o usuário (simulado)
        return redirect('/usuarios');
    }
}
