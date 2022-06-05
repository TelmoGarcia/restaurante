<?php

namespace App\Http\Controllers;

use App\Models\plato;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['plato']=plato::paginate(10);
        return view ('platos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('platos.create');
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

        $campos=[
            'nombre'=>'required|string|max:100',
            'categoria'=>'required|string|max:100',
            'precio'=>'required|string|max:1000',
            'foto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'Se requiere foto para continuar',
        ];

        $this->validate($request,$campos,$mensaje);


        $datosPlatos = request()->except('_token');
        
        if($request->hasFile('foto')){
            $datosPlatos['foto']=$request->file('foto')->store('uploads', 'public');
        }

        plato::insert($datosPlatos);


        //return response()->json($datosPlatos);

        return redirect('platos')->with('mensaje','Plato agregado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function show(plato $plato)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $plato=plato::findOrfail($id);
        return view ('platos.edit', compact('plato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos=[
            'nombre'=>'required|string|max:100',
            'categoria'=>'required|string|max:100',
            'precio'=>'required|string|max:1000',
            

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            
        ];


        if($request->hasFile('foto')){
        
            $campos=['foto'=>'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['foto.required'=>'Se requiere foto para continuar',];   
        
        }

        $this->validate($request,$campos,$mensaje);




        $datosPlatos = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $plato=plato::findOrfail($id);
            
            Storage::delete('public/'.$plato->foto);

            $datosPlatos['foto']=$request->file('foto')->store('uploads', 'public');
        }

        plato::where('id','=',$id)->update($datosPlatos);

        $plato=plato::findOrfail($id);


        //return view ('platos.edit', compact('plato'));

        return redirect('platos')->with('mensaje','Plato modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $plato=plato::findOrfail($id);

        if(Storage::delete('public/'.$plato->foto)){

            plato::destroy($id);

        }

        

        return redirect('platos')->with('mensaje','Plato borrado correctamente');
    }


}
