<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;
use App\Models\TipoTexto;

class TextoController extends Controller
{
    public function index(){
        $textos = Texto::paginate(10);

        return view('index', compact('textos'));
    }

    public function show($id){
        $texto = Texto::find($id);

        return view('show', compact('texto'));
    }

    public function create(){
        $tipo_textos = TipoTexto::orderBy('tipo', 'asc');

        return view('create', compact('textos'));
    }

    public function store(Request $request){
$this->validate($request, [
    'id_tipo_texto'=>'required|integer|exists:tipo_textos,id',
    'texto'=>'required|string',
    'video'=>'required|string',
]);

try{
    Texto::create($request->all());
    return back()->with('success', "Feito com sucesso");
}catch(\Exception $ex){
return back()->with('error', $ex->getMessage());
}
    }

    public function edit($id){

    }

    public function update(Request $request){

    }

    public function destroy($id){

    }
}
