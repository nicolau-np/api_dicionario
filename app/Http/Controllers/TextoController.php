<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;
use App\Models\TipoTexto;

class TextoController extends Controller
{
    public function index(){

        $textos = Texto::paginate(10);
        $type = 'home';
        return view('textos.index', compact('textos', 'type'));
    }

    public function show($id){
        $texto = Texto::find($id);
        if(!$texto)
            return back()->with('error', "Nao encontrou");
            $type = 'home';
        return view('textos.show', compact('texto', 'type'));
    }

    public function create(){
        $tipo_textos = TipoTexto::orderBy('tipo', 'asc');
        $type = 'home';
        return view('textos.create', compact('tipo_textos', 'type'));
    }

    public function store(Request $request){
            $this->validate($request, [
                'id_tipo_texto'=>'required|integer|exists:tipo_textos,id',
                'texto'=>'required|string',
                'video'=>'required|string',
            ],[],[
                'id_tipo_texto'=>'Tipo Texto',
                'texto'=>'Texto',
                'video'=>'Video',
            ]);

            try{
                Texto::create($request->all());
                return back()->with('success', "Feito com sucesso");
            }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
            }
    }

    public function edit($id){
        $texto = Texto::find($id);
        if(!$texto)
            return back()->with('error', "Nao encontrou");

        $tipo_textos = TipoTexto::orderBy('tipo', 'asc');
        $type = 'home';
        return view('textos.edit', compact('texto', 'tipo_textos', 'type'));
    }

    public function update(Request $request, $id){
        $texto = Texto::find($id);
        if(!$texto)
            return back()->with('error', "Nao encontrou");

            $this->validate($request, [
                'id_tipo_texto'=>'required|integer|exists:tipo_textos,id',
                'texto'=>'required|string',
                'video'=>'required|string',
            ],[],[
                'id_tipo_texto'=>'Tipo Texto',
                'texto'=>'Texto',
                'video'=>'Video',
            ]);

            try{
                Texto::find($id)->update($request->all());
                return back()->with('success', "Feito com sucesso");
            }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
            }
    }

    public function destroy($id){
        $texto = Texto::find($id);
        if(!$texto)
            return back()->with('error', "Nao encontrou");

        try{
            $texto->delete();
            return back()->with('success', "Feito com sucesso");
        }catch(\Exception $ex){
            return back()->with('error', $ex->getMessage());
        }

    }
}
