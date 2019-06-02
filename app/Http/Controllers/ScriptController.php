<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Script;
use Illuminate\Support\Facades\Auth;

class ScriptController extends Controller
{
    public function index(){
        $scripts = Script::all();
    	return view("scripts.index", ["scripts" => $scripts]);
    }

    public function store($id){
        $script = new Script();
        $script->content = null;
        $script->user_id = Auth::user()->id;
        $script->save();
        // dd("storetest");
    	return redirect()->route("scripts.edit", ['id' => $id]);
    }

    public function edit($id){
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
