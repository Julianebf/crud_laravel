<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;


class EnderecoController extends Controller
{
    public function index()
    {

        $endereco = Endereco::all();
        return view ('layouts.endereco', compact('endereco'));
    }

    public function create()
    {
        return view(view:'layouts/create');
    }

    public function store(Request $request)
    {

            $request->validate([
            'cep' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'numero' => 'required',
            'referencia' => 'required',     
        ]);
        Endereco::create($request->all());
        return redirect()->route('registrar_endereco')
        ->with('success', 'Cadastro Realizado');
    }
}
