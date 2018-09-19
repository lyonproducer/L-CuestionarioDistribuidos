<?php

namespace App\Http\Controllers\Preguntas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pensamiento\PreguntasPensamiento;
use App\Models\Pensamiento\ResultadosPensamiento;

class PensamientoController extends Controller
{
    public function index(){

        $preguntas = PreguntasPensamiento::All();
        return response()->json($preguntas);
    }

    public function indexPensador(){

        $preguntas = PreguntasPensamiento::where('tipo','Pensador')->take(2)->get();
        return response()->json($preguntas);
    }

    public function indexLeal(){

        $preguntas = PreguntasPensamiento::where('tipo','Leal')->take(2)->get();
        return response()->json($preguntas);
    }

    public function indexEntusiasta(){

        $preguntas = PreguntasPensamiento::where('tipo','Entusiasta')->take(2)->get();
        return response()->json($preguntas);
    }

    public function storeRespuestas(Request $request){

        //dd($request->all());
        $resultado = new ResultadosPensamiento;
        $resultado = ResultadosPensamiento::create($request->all());
        return response()->json($resultado);
    }
}
