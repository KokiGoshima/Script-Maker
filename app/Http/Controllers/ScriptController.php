<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Script;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateScript;
use App\Construction;


class ScriptController extends Controller
{
    public function index(){
        $scripts = Script::where("user_id", Auth::user()->id)->orderBy("created_at", "desc")->get();

    	return view("scripts.index", ["scripts" => $scripts]);
    }

    public function store(){
        $script = new Script();
        $script->content = null;
        $script->user_id = Auth::user()->id;
        $script->save();
    	return redirect()->route("scripts.edit", ['id' => $script->id]);
    }

    public function edit($id){

        $constructions = Construction::with('situations')->get();
        $script = Script::find($id);
        return view("scripts.edit", ["script" => $script, "constructions" => $constructions]);
    }

    public function update($id, CreateScript $request){
    	$script = Script::find($id);
        $script->content = $request->textbox;
        $script->title = $request->title;
        $script->save();
        $request->session()->flash('message', '保存しました');
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
