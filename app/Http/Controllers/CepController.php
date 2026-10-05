<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function index()
    {
        return view('cep.index');
    }

    public function consultar(Request $request)
    {
        
       // validação
        $validacao= $request
            ->validate(['cep' => 'required|digits:8']);
        $cep = $validacao['cep'];

       // requisição
       $resposta = Http::timeout(5)
       -> withoutVerifying()
       ->get("https://viacep.com.br/ws/{$cep}/json/");

        $dados = $resposta->json();

        return view('cep.index', ['endereco' => $dados]);
    }
}
