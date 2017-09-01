<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\User;


class CityController extends Controller
{
    public function index()
    {
        $cities= City::orderBy('county','asc')->get();
        return view('city.index')->withCities($cities);
    }


    public function create()
    {
       $cities= City::all();
       return view('city.create')->withCities($cities);
    }


    public function store(Request $request)
    {
       $this->validate($request, array(
         
        'name'=> 'required|max:255',
        'county'=> 'required|max:255',
        ));
        
         $cities= new City;
         $cities->name= $request->name;
         $cities->county=$request->county;
         
         $cities->save();
    
      return redirect()->route('city.index');
    }

    public function show($id)
    {
        $city = City::find($id);
        return view('city.show')->withCity($city);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function delete($id){
        $city= City::find($id);
        return view('cities.delete')->withCity($city);
    }
    
    public function destroy($id)
    {
        $city= City::find($id);
        $city->delete();
            
        return redirect()->route('city.index');
    }
}
