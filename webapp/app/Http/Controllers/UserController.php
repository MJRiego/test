<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    return 'HELLO from USER COntroller';
    }
    public function show($id){
      
        return view('user')
                ->with('name', 'Pilar')
                ->with('age', 2)
                ->with('id', $id);

    }
}
