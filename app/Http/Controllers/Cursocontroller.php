<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursocontroller extends Controller{
        public function esPrimo($num){

            if(!is_numeric($num))
                return false;

            for ($i = 2; $i < $num; $i++) {

                if (($num % $i) == 0) {

                    // No es primo :(
                    return "no es primo";

                }
                return "es primo";
            }




    }


    public function Amigos($num1, $num2){
        $_acum1=0;
        $_acum2 = 0;
            for($j=1;$j<$num1;$j++){
                $div1= $num1%$j;
                if($div1==0){
                $_acum1=$_acum1+$j;
                }
            }
            for($i=1;$i<$num1;$i++){
                $div2= $num2%$i;
                if($div2==0){
                $_acum2=$_acum2+$i;
                }
            }
            if($_acum1==$num2 && $_acum2==$num1){
                return "Son amigos";

            }else{
                return "Son casi algo";
            }


    }
}

