<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScriptController extends Controller
{
    public function index(){
    	return view("scripts.index");
    }

    public function store(){
    	
    }

    public function edit(){
    	return view("scripts.edit");
    }

    public function update(){
    	
    }

    public function showSample(){
    	return view("scripts.showSample");
    }

    public function destroy(){
    	
    }
}
