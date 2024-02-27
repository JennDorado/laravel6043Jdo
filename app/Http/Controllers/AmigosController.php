<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmigosController extends Controller
{
    public function create(){

        return view('FormuAmis');
    }

    public function store(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;

        $acum1 = 0;
        $acum2 = 0;

        for ($j=1; $j <$num1 ; $j++) {
            $div1 = $num1 % $j;
                if($div1==0){
                    $acum1 = $acum1 + $j;
                }
        }
        for ($i=1; $k <$num2 ; $i++) {
            $div2 = $num2 % $i;
                if($div2==0){
                    $acum2 = $acum2 + $i;
                }
        }

        if ($acum1==$num2 && $acum2==$num1) {
            return 'Son amigos';
        }
        else{
            return 'Son casi algo';
        }

    }
}
