<?php

namespace App\Http\Controllers\Preguntas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sentimiento\PreguntasSentimiento;
use App\Models\Sentimiento\ResultadosSentimiento;

class SentimientoController extends Controller
{
    public function index(){

        $preguntas = PreguntasSentimiento::All();
        return response()->json($preguntas);
    }

    public function indexAyudador(){

        $preguntas = PreguntasSentimiento::where('tipo','Ayudador')->take(3)->get();
        return response()->json($preguntas);
    }

    public function indexTriunfador(){

        $preguntas = PreguntasSentimiento::where('tipo','Triunfador')->take(3)->get();
        return response()->json($preguntas);
    }

    public function indexArtista(){

        $preguntas = PreguntasSentimiento::where('tipo','Artista')->take(3)->get();
        return response()->json($preguntas);
    }

    public function storeRespuestas(Request $request){

        //dd($request->all());
        $resultado = new ResultadosSentimiento;
        $resultado = ResultadosSentimiento::create($request->all());
        return response()->json($resultado);
    }
}
