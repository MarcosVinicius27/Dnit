<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        $usuarios = Usuario::all();
        $total = Usuario::all()->count();
        return view('list-usuarios', compact('usuarios', 'total'));
    }

    public function create() {
        return view('include-usuarios');
    }

    public function store(Request $request) {
        $user = new Usuario;
        $user->name = $request->name;
        $user->senha = $request->senha;
        $user->cpf = $request->cpf;
        $user->data = $request->data;
        $user->save();
        return redirect()->route('user.index')->with('message', 'Usuário criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $user = Usuario::findOrFail($id);
        return view('alter-Usuario', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = Usuario::findOrFail($id); 
        $user->name = $request->name;
        $user->senha = $request->senha;
        $user->cpf = $request->cpf;
        $user->data = $request->data;
        $user->save();
        return redirect()->route('user.index')->with('message', 'Usuário alterado com sucesso!');
    }

    public function destroy($id) {
        $user = Usuario::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('message', 'Usuário excluído com sucesso!');
    }

}
