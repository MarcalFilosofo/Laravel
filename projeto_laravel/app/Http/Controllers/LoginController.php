<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    // public function index(Request $request){

    //     $erro = '';
    //     $erro = $request->get('erro');

    //     if ($request->get('erro') == 1) {
    //         $erro = 'Usuário/Senha incorreto';
    //     }
        
    //     if ($request->get('erro') == 2) {
    //         $erro = 'Necessário fazer login para acessar a página';
    //     }


    //     return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    // }

    // public function autenticar(Request $request){
    //     $regras = [
    //         'usuario' => 'email',
    //         'senha' => 'required',
    //     ];

    //     $feedback = [
    //         'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
    //         'senha.required' => 'O campo senha é obrigatório',
    //     ];

    //     $request->validate($regras, $feedback);

    //     $email = $request->get('email');
    //     $password = $request->get('senha');

    //     $user = new User();

    //     $usuario = $user->where('email', $email)->where('password', $password)->get()->first();
        
    //     if(isset($usuario->name)){
    //         session_start();
    //         $_SESSION['nome'] = $usuario->name;
    //         $_SESSION['email'] = $usuario->email;

    //         return redirect()->route('app.cliente');
    //     }else{
    //         return redirect()->route('site.login', ['erro' => 1]);
    //     }

    // }

    // public function sair(Request $request){
    //     session_destroy();
    //     return redirect()->route('site.index');
    // }





    public function index(Request $request) {

        $erro = '';
        
        if($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha não existe';
        }

        if($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para ter acesso a página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request) {
        
        //regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        //se não passar pelo validate
        $request->validate($regras, $feedback);

        //recuperamos os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        //iniciar o Model User
        $user = new User();

        $usuario = $user->where('email', $email)
                    ->where('password', $password)
                    ->get()
                    ->first();

        if(isset($usuario->name)) {
            
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function sair() {
        session_destroy();
        return redirect()->route('site.index');
    }

}
