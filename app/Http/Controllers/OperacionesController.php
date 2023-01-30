<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function listarPrimerosPrimos($n){
        $primos = array();
        $cont = 0;
        $i = 2;
        while($cont < $n){
            $esPrimo = true;
            for($j = 2; $j < $i; $j++){
                if($i % $j == 0){
                    $esPrimo = false;
                }
            }
            if($esPrimo){
                $primos[] = $i;
                $cont++;
            }
            $i++;
        }
        return view('operaciones/primos', compact('cont', 'primos'));
    }

    public function factorial($numero){
        $factorial = 1;
        for($i = 1; $i <= $numero; $i++){
            $factorial *= $i;
        }
        return view('operaciones/factorial', compact('numero', 'factorial'));
    }
}
