<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $pepe = "asdasd2222";
    	return view('users', ["pepe"=>$pepe ]);
    }


    public function show(){
    	return "pepe";
    }


    public function create(){
    	return "pepe";
    }
}
