<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class BrandAPIController extends Controller
{
    public function index()
    {
        $brands = DB::table('brand')
        ->select('brand.*')
        ->get();
        return $brands;
    }
    public function store( Request $request )
    {
        return Brand::create($request->all());
    }
    public function show($id)
    {
        $brand = DB::table('brand')
        ->select('brand.*')
        ->where('brand.id','=',$id)
        ->get();
        return $brand;
    }
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->update($request->all());
        return $brand;
    }
    public function destroy($id)
    {
        return Brand::destroy($id);
    }
    public function search($name)
    {
        return Brand::where('b_name','like','%'.$name.'%')->orWhere('id','like','%'.$name.'%')->get();
    }
}
