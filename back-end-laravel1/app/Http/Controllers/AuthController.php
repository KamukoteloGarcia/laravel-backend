<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Página inicial -> tela de login
    public function home()
    {
        return view('welcome');
    }

    // Função de login/registro
    public function login(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome'  => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:50', 'unique:usuarios,email'],
        ]);

        
        $user = Usuario::create([
        'nome'  => $request->nome,
        'email' => $request->email
    ]);

        // Guarda o usuário na sessão
        session(['usuario' => $user->id]);

        // Redireciona para página da internet ativa
        return redirect()->route('internet-ativo');
    }

    // Página de internet liberada
    public function internet()
    {
        // Verifica se o usuário está logado
        if (!session('usuario')) {
            return redirect()->route('home');
        }

        // Busca todos os usuários cadastrados (opcional)
        $users = Usuario::all();

        return view('internet', compact('users'));
    }

    // Função para logout (sair e limpar sessão)
    public function logout()
    {
        session()->forget('usuario');
        return redirect()->route('home');
    }
}
