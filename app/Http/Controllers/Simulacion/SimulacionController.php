<?php

namespace App\Http\Controllers\Simulacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Generator as Faker;
use DateTime;
use App\User;
use App\Resultado;

use App\Models\Instinto\PreguntasInstinto;
use App\Models\Instinto\ResultadosInstinto;

use App\Models\Pensamiento\PreguntasPensamiento;
use App\Models\Pensamiento\ResultadosPensamiento;

use App\Models\Sentimiento\PreguntasSentimiento;
use App\Models\Sentimiento\ResultadosSentimiento;


class SimulacionController extends Controller
{
    public function generateData($cantidad,Faker $faker){

        $users = [];

        for ($i = 0; $i < $cantidad; $i++){
 
            /////////////
            //Usuario
            ///////////// 
            $user = new User;
            
            $gender = $faker->randomElement(['male','female']);

            $user->nombre = $faker->name;
            $user->cedula = rand(1000000,50000000);
            $user->pais = $faker->country;
            $user->profesion = $faker->word;

            //Genero
            if($gender == "male"){
                $user->sexo = 'Hombre';
            }else
                $user->sexo = 'Mujer';

            //Fecha y Edad
            $user->fechaNacimiento = $faker->date($format = 'Y-m-d', $max = 'now');
            $año = substr($user->fechaNacimiento, 0,6);
            $user->edad = 2018 - (int)$año;

            $user->estadoCivil = $faker->randomElement(['Soltero','Casado']);
            $user->tieneTrabajo = $faker->randomElement(['Si','No']);
            $user->vivePadres = $faker->randomElement(['Si','No']);
            $user->tieneHermanos = $faker->randomElement(['Si','No']);

            //Hermanos
            if($user->tieneHermanos == 'Si'){
                $user->hermanos = rand(1,8);
            }

            $user->save();
            array_push($users,$user);

            /////////////
            //Pensamiento
            /////////////
            
            $pensamiento = new ResultadosPensamiento;
            $pensamiento->cedula = $user->cedula;
            $pensamiento->tipo =   'Pensador';
            $pensamiento->total =  rand(1,25);
            $pensamiento->save();
            $pensadorPuntaje = $pensamiento->total;

            $pensamiento = new ResultadosPensamiento;
            $pensamiento->cedula = $user->cedula;
            $pensamiento->tipo =   'Entusiasta';
            $pensamiento->total =  rand(1,25);
            $pensamiento->save();
            $entusiastaPuntaje = $pensamiento->total;

            $pensamiento = new ResultadosPensamiento;
            $pensamiento->cedula = $user->cedula;
            $pensamiento->tipo =   'Leal';
            $pensamiento->total =  rand(1,25);
            $pensamiento->save();
            $lealPuntaje = $pensamiento->total;

            if(($pensadorPuntaje >= $entusiastaPuntaje) && ($pensadorPuntaje >= $lealPuntaje)){
                $pensamientoPuntaje = $pensadorPuntaje;
                $pensamientoTipo= 'Pensador';
            }else
            if(($entusiastaPuntaje >= $pensadorPuntaje) && ($entusiastaPuntaje >= $lealPuntaje)){
                $pensamientoPuntaje = $entusiastaPuntaje;
                $pensamientoTipo= 'Entusiasta';
            }else
            if(($lealPuntaje >= $entusiastaPuntaje) && ($lealPuntaje >= $pensadorPuntaje)){
                $pensamientoPuntaje = $lealPuntaje;
                $pensamientoTipo= 'Leal';
            }


            /////////////
            //Sentimiento
            ///////////// 
            $sentimiento = new ResultadosSentimiento;
            $sentimiento->cedula = $user->cedula;
            $sentimiento->tipo =   'Ayudador';
            $sentimiento->total =  rand(1,25);
            $sentimiento->save();
            $ayudadorPuntaje = $sentimiento->total;

            $sentimiento = new ResultadosSentimiento;
            $sentimiento->cedula = $user->cedula;
            $sentimiento->tipo =   'Triunfador';
            $sentimiento->total =  rand(1,25);
            $sentimiento->save();
            $triunfadorPuntaje = $sentimiento->total;

            $sentimiento = new ResultadosSentimiento;
            $sentimiento->cedula = $user->cedula;
            $sentimiento->tipo =   'Artista';
            $sentimiento->total =  rand(1,25);
            $sentimiento->save();
            $artistaPuntaje = $sentimiento->total;

            if(($ayudadorPuntaje >= $triunfadorPuntaje) && ($ayudadorPuntaje >= $artistaPuntaje)){
                $sentimientoPuntaje = $ayudadorPuntaje;
                $sentimientoTipo= 'Ayudador';
            }else
            if(($triunfadorPuntaje >= $ayudadorPuntaje) && ($triunfadorPuntaje >= $artistaPuntaje)){
                $sentimientoPuntaje = $triunfadorPuntaje;
                $sentimientoTipo= 'Triunfador';
            }else
            if(($artistaPuntaje >= $triunfadorPuntaje) && ($artistaPuntaje >= $ayudadorPuntaje)){
                $sentimientoPuntaje = $artistaPuntaje;
                $sentimientoTipo= 'Artista';
            }

            //dd($sentimientoTipo);

            /////////////
            //Instinto
            ///////////// 
            $instinto = new ResultadosInstinto;
            $instinto->cedula = $user->cedula;
            $instinto->tipo =   'Reformador';
            $instinto->total =  rand(1,25);
            $instinto->save();
            $reformadorPuntaje = $instinto->total;

            $instinto = new ResultadosInstinto;
            $instinto->cedula = $user->cedula;
            $instinto->tipo =   'Protector';
            $instinto->total =  rand(1,25);
            $instinto->save();
            $protectorPuntaje = $instinto->total;

            $instinto = new ResultadosInstinto;
            $instinto->cedula = $user->cedula;
            $instinto->tipo =   'Pacifico';
            $instinto->total =  rand(1,25);
            $instinto->save();
            $pacificoPuntaje = $instinto->total;

            if(($reformadorPuntaje >= $protectorPuntaje) && ($reformadorPuntaje >= $pacificoPuntaje)){
                $instintoPuntaje = $reformadorPuntaje;
                $instintoTipo= 'Reformador';
            }else
            if(($protectorPuntaje >= $reformadorPuntaje) && ($protectorPuntaje >= $pacificoPuntaje)){
                $instintoPuntaje = $protectorPuntaje;
                $instintoTipo= 'Protector';
            }else
            if(($pacificoPuntaje >= $protectorPuntaje) && ($pacificoPuntaje >= $reformadorPuntaje)){
                $instintoPuntaje = $pacificoPuntaje;
                $instintoTipo= 'Pacifico';
            }

            //dd($instintoTipo);

            /////////////
            //Resultado user
            ///////////// 

            $instinto = new Resultado;
            $instinto->cedula = $user->cedula;

            if(($pensamientoPuntaje >= $sentimientoPuntaje) && ($pensamientoPuntaje >= $instintoPuntaje)){
                $Puntaje = $pensamientoPuntaje;
                $Tipo= $pensamientoTipo;
            }else
            if(($sentimientoPuntaje >= $pensamientoPuntaje) && ($sentimientoPuntaje >= $instintoPuntaje)){
                $Puntaje = $sentimientoPuntaje;
                $Tipo= $sentimientoTipo;
            }else
            if(($instintoPuntaje >= $sentimientoPuntaje) && ($instintoPuntaje >= $pensamientoPuntaje)){
                $Puntaje = $instintoPuntaje;
                $Tipo= $instintoTipo;
            }

            $instinto->tipo = $Tipo;
            $instinto->total = $Puntaje;
            $instinto->save();

            //dd($Tipo);
        }

        return response()->json(['data' => 'Agregado con exito']);
        //return response()->json($users);

    }
}
