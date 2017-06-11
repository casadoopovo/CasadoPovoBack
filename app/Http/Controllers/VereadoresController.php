<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VereadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vereadores = \App\Models\Vereadores::all();
        return view("admin.vereadores.listar", ['vereadores' => $vereadores]);
    }

    public function getVereadores(){
        $vereadores = \App\Models\Vereadores::all();
        if ($vereadores->isEmpty()) {
           return response()->json(['error' => 'not_found'], 401);
        }

       return response()->json(['vereadores' => $vereadores], 200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.vereadores.cadastrar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = Auth::user()->id;
        $path = $request->file('imgInp')->store('vereadores/' . $userId . '/perfil/imagem');
        $urlImagemParaSalvarNaBase = "/storage/" . $path;
        $request['foto'] = $urlImagemParaSalvarNaBase;

        $vereador = \App\Models\Vereadores::create($request->all());

        if ($vereador) {
            $data = "Vereador " . $vereador->nome . "cadastrado com sucesso";
            return response()->view('admin.vereadores.listar');
        }

        $data = "Não foi possivel cadastrar o vereador ";
        return response()->view('admin.vereadores.cadastrar');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view("admin.vereadores.atualizar");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
