<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Texto;
use App\Http\Resources\TextoResource;

class TextoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textos = Texto::orderBy('texto', 'asc')->get();

        return TextoResource::collection($textos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $texto = Texto::find($id);

        return new TextoResource($texto);
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

    public function search($texto){
        $texto = Texto::where('texto', 'LIKE', "%{$texto}%")->first();

        return new TextoResource($texto);
    }

    public function keyup(Request $request){
        $texto = Texto::where('texto', 'LIKE', "%{$request->texto}%")->get();

        return new TextoResource($texto);
    }

    public function category($id_tipo_texto){
        $textos = Texto::where('id_tipo_texto', $id_tipo_texto)->get();

        return TextoResource::collection($textos);
    }

    public function random(){

        $texto = Texto::inRandomOrder()->first();

        return new TextoResource($texto);
    }
}
