<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisaoGeralController extends Controller
{
    public function visaoGeral(){
        return view ('site.visao-geral');
    }
}
