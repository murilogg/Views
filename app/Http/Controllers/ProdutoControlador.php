<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function lista()
    {
        $produtos = [
            "notebook asus",
            "notebook acer",
            "predator helios 300",
            "2am c300"
        ];
        return view('produtos', compact('produtos'));
    }

    public function meus($palavra)
    {
        return view('secao_produtos', compact('palavra'));
    }

    public function opcao_cor()
    {
        return view('mostrar');
    }

    public function opcao($opcao)
    {
        return view('repeticao', compact('opcao'));
    }

    public function loop_for($n)
    {
        return view('loopfor', compact('n'));
    }

    public function loopforeach()
    {
        $produtos = [
            ["id" => 1, "nome" => "computador"],
            ["id" => 2, "nome" => "monitor"],
            ["id" => 3, "nome" => "teclado"],
            ["id" => 4, "nome" => "mouse"],
            ["id" => 5, "nome" => "impressora"],
            ["id" => 6, "nome" => "caixa de som"],
        ];
        return view('loopforeach',compact('produtos'));
    }
}
