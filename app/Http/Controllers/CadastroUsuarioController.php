<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuarioController extends Controller
{
    //

    public function cadastro(Request $request)
    {
        
        $name   =   $request->name;
        $email  =   $request->email;
        $senha  =   $request->pass;
        return view('index', ['email' => $email, 'name' => $name]);
    }
}
