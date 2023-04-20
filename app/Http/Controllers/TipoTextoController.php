<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoTexto;

class TipoTextoController extends Controller
{
    public function index(){
        $tipo_textos = TipoTexto::paginate(10);

        return view('tipo_textos.index', compact('tipo_textos'));
    }

    public function show($id){
        $tipo_texto = TipoTexto::find($id);
        if(!$tipo_texto)
            return back()->with('error', "Nao encontrou");

        return view('tipo_textos.show', compact('tipo_texto'));
    }

    public function create(){

        return view('tipo_textos.create');
    }

    public function store(Request $request){
            $this->validate($request, [
                'tipo'=>'required|string',
                'img'=>'required|string',

            ],[],[
                'tipo'=>'Tipo',
                'img'=>'Imagem',
            ]);

            try{
                TipoTexto::create($request->all());
                return back()->with('success', "Feito com sucesso");
            }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
            }
    }

    public function edit($id){
        $tipo_texto = TipoTexto::find($id);
        if(!$tipo_texto)
            return back()->with('error', "Nao encontrou");

        return view('tipo_textos.edit', compact('tipo_texto'));
    }

    public function update(Request $request, $id){
        $tipo_texto = TipoTexto::find($id);
        if(!$tipo_texto)
            return back()->with('error', "Nao encontrou");

            $this->validate($request, [
                'tipo'=>'required|string',
                'img'=>'required|string',

            ],[],[
                'tipo'=>'Tipo',
                'img'=>'Imagem',
            ]);

            try{
                TipoTexto::find($id)->update($request->all());
                return back()->with('success', "Feito com sucesso");
            }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
            }
    }

    public function destroy($id){
        $tipo_texto = TipoTexto::find($id);
        if(!$tipo_texto)
            return back()->with('error', "Nao encontrou");

        try{
            $tipo_texto->delete();
            return back()->with('success', "Feito com sucesso");
        }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
        }

    }
}
