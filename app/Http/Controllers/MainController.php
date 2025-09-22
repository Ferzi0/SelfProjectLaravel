<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    showIndex(){
        return view('home');
    }

    showArray(){
        $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'pict1.jpg'],
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'pict2.jpg'],

        …
        ];
    }
}
