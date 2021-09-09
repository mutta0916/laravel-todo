<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $data = ['garbage'=>'焼き肉食べたい'];
        return view('todo.index', $data);
    }
}
