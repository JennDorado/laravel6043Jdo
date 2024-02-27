<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function create(){

        return view('FormuNotas');
    }

    public function store(Request $request){

        $nota1=$request->nota1;
        $nota2=$request->nota2;
        $nota3=$request->nota3;

        return $nota1+$nota2+$nota3/3;


    }
}
