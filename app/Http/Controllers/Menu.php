<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
    public function Index(){
        return view('Menu.menuLista');
    }
}
