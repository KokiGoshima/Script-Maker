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
        // $scripts = Script::all()->orderBy("created_at", "desc");
        $scripts = Script::where("user_id", Auth::user()->id)->orderBy("created_at", "desc")->get();
        // $scripts = Auth::user()->scripts;

        // dd($scripts);
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
        $constructions = Construction::all();
        $situations = Situation::all();
        $phrases = Phrase::all();
        $script = Script::find($id);
    	return view("scripts.edit", ["script" => $script, "constructions" => $constructions, "situations" => $situations, "phrases" => $phrases]);
    }

    public function update($id, CreateScript $request){
    	$script = Script::find($id);
        $script->content = $request->textbox;
        $script->title = $request->title;
        $script->save();
        return redirect()->route("scripts.edit", ['id' => $id]);
    }

    public function showSample(){
    	return view("scripts.showSample");
    }

    public function destroy($id){
    	$script = Script::find($id);
        $script->delete();
        return redirect()->route("scripts.index");
    }
}
