<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Script;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateScript;
use App\Construction;
use App\Situation;
use App\Phrase;

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
        // $construction = Construction::find(3);
        // $situations = Situation::all();
        // $phrases = Phrase::all();
        // dd(Construction::find(1)->situations);
        $script = Script::find($id);
        // dd($script);
    	// return view("scripts.edit", ["script" => $script, "constructions" => $constructions, "situations" => $situations, "phrases" => $phrases]);
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

    public function destroy($id){
        // dd($id);
    	$script = Script::find($id);
        $script->delete();
        return redirect()->route("scripts.index");
    }
}
