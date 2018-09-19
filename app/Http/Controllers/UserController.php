<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Resultado;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        //$users = DB::connection('mongodb')->collection('usuarios')->get();
        return $users;
    }

    public function indexResultados()
    {   
        $result = Resultado::all();
        //$users = DB::connection('mongodb')->collection('usuarios')->get();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        //dd($request->toArray());
        $user = new User;
        $user = User::create($request->all());

        return response()->json(['data'=> "Añadido Correctamente"]);
        /*
        $user->nombre = $request->name;
        $user->cedula = $request->cedula;
        $user->nombre = $request->name;
        $user->save();
        */
    }

    public function storeResultado(Request $request){

        //dd($request->toArray());
        $respuesta = new Resultado;
        $respuesta = Resultado::create($request->all());
        return response()->json($respuesta);
        //return response()->json(['data'=> "Resultado añadido Correctamente"]);
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
        //
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
