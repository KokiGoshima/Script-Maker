<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Script;
use Illuminate\Support\Facades\Auth;

class ScriptController extends Controller
{
    public function index(){
        // $scripts = Script::all()->where("user_id", Auth::user()->id);
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
        $script = Script::find($id);
        // dd($script);
    	return view("scripts.edit", ["script" => $script]);
    }

    public function update(){
    	
    }

    public function showSample(){
    	return view("scripts.showSample");
    }

    public function destroy(){
    	
    }
}
