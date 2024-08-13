<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engine;
use Illuminate\Support\Facades\DB;

class EngineAPIController extends Controller
{
    public function index()
    {
        $engines = DB::table('engine')
        ->select('engine.*')
        ->get();
        return $engines;
    }
    public function store(Request $request)
    {
        return Engine::create($request->all());
    }

    public function show($id)
    {
        $engine = DB::table('engine')
        ->select('engine')
        ->where('engine.id','=',$id)
        ->get();

        return $engine;
    }
    public function update (Request $request, $id)
    {
        $engine = Engine::find($id);
        $engine->update($request->all());
        return $engine;
    }
    public function destroy($id)
    {
        return Engine::destroy($id);
    }
    public function search($name)
    {
        return Engine::where('e_type','like','%'.$name.'%')->orWhere('id','like','%'.$name.'%')->get();
    }
}
