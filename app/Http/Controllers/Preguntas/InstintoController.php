<?php

namespace App\Http\Controllers\Preguntas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instinto\PreguntasInstinto;
use App\Models\Instinto\ResultadosInstinto;

class InstintoController extends Controller
{
    public function index(){

        $preguntas = PreguntasInstinto::All();
        return response()->json($preguntas);
    }

    public function indexReformador(){

        $preguntas = PreguntasInstinto::where('tipo','Reformador')->take(3)->get();
        return response()->json($preguntas);
    }

    public function indexProtector(){

        $preguntas = PreguntasInstinto::where('tipo','Protector')->take(3)->get();
        return response()->json($preguntas);
    }

    public function indexPacifico(){

        $preguntas = PreguntasInstinto::where('tipo','Pacifico')->take(3)->get();
        return response()->json($preguntas);
    }

    public function storeRespuestas(Request $request){

        //dd($request->all());
        $resultado = new ResultadosInstinto;
        $resultado = ResultadosInstinto::create($request->all());
        return response()->json($resultado);
    }
}
