<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{
    
    public function index(){

        echo 'Hola, mundo !';

    }

    public function view(){
        return view('welcome');
    }

}
