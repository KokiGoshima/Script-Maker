<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Script;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateScript;

class ScriptController extends Controller
{
    public function index(){
        // $scripts = Script::all()->where("user_id", Auth::user()->id);
        $scripts = Script::all();
    	return view("scripts.index", ["scripts" => $scripts]);
    }

    public function store(){
        $script = new Script();
        $script->content = null;
        $script->user_id = Auth::user()->id;
        $script->save();
        // dd("storetest");
    	return redirect()->route("scripts.edit", ['id' => $script->id]);
    }

    public function edit($id){
        $script = Script::find($id);
        // dd($script);
    	return view("scripts.edit", ["script" => $script]);
    }

    public function update($id, CreateScript $request){
    	$script = Script::find($id);
        $script->content = $request->textbox;
        $script->save();
        return redirect()->route("scripts.edit", ['id' => $id]);
    }

    public function showSample(){
    	return view("scripts.showSample");
    }

    public function destroy(){
    	
    }
}
