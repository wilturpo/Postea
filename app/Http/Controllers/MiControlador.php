<?php
namespace App\Http\Controllers;

use Iluminate\Http\Request;

class MiControlador extends Controller{

    public function inicio(){
        return view("inicio");
    }

    public function arequipa(){
        return view("arequipa");
    }

    public function huacachina(){
        return view("huacachina");
    }
}