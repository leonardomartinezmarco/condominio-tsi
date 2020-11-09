<?php

namespace App\Http\Controllers;

use App\Models\Mural;
use Illuminate\Http\Request;

class MuralController extends Controller{
    public function index(){
        return view('dashboard')->with('mural', Mural::all());
    }

    public function store(Request $request){
        if (!$request->nome || !$request->descricao) {
            return response()->json(["error" => "Reveja os dados de consulta"], 400);
        }

        $not = Mural::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ]);
        return response()->json($not);
    }

    public function list(){
        $mural = Mural::all();

        if ($mural->count() > 0) {
            return response()->json($mural);
        }
        return response()->json(["error" => "Não há regras e noticias"], 404);
    }
}
