<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\City;

class UserController extends Controller
{
     
    public function index()
    {
        //$users= User::all();
        //return view('user.index')->withUsers($users);
        $users= User::all();
        return view('see')->withUsers($users);
        
    }

    public function create()
    {
        // dd($request->all());
        $users= User:: all();
                                
        return view('user.create')->withUsers($users);
    }

    public function userCityCreate($id)
    {
        $users = User:: all();
        $users->city_id = $id;

        return view('user.create')->withUsers($users);
    }

 
    public function store(Request $request)
    {
        

         $this->validate($request, array(
        'name'=>'required|max:25',
        // 'password'=>'required|min:5',
        // 'usertype'=>'required',
        'email'=>'required',
        'city_id'=>'required'
        ));
        
           
        $user = new User;
        $user->name =  $request->name;
        $user->email=  $request->email;
        // $user->password = $request->password;
        // $user->usertype =  $request->usertype;
        $user->city_id= $request->city_id;
        $user->save();

        // dd($user); 

        return redirect()->action('CityController@show', $user->city_id);
        }


    public function show($id)
    {
        $users= User:: all();
        $cities= City:: all();
        return view('user.show')->withUsers($users)->withCities($cities);
    // return view('see')->withUsers($users)->withCities($cities);
    }

    public function edit($id)
    {
          $user = User::find($id);             
          return view('user.edit')->withUser($user);
    }


    public function update(Request $request, $id)
    {
            $this->validate($request, array(
             'name'=>'required|max:25',
             'password'=>'required|min:5',
             'usertype'=>'required',
             'email'=>'required',
             'city'=>'required'           
           ));
                
            $user = User::find($id);
            $user->name =  $input->input('name');
            $user->email=  $request->input('email');
            $user->password = $request->input('password');
            $user->usertype =  $request->input('usertype');
            $user->city=  $request->input('city').', ' .input('county');
            $user->save();
                
        return redirect()->route('user.show', $user->id);
    }


    public function destroy($id)
    {
    $user = User::find($id);
    $user->deleted = '1';
    
    $user->save();

    return Redirect::to('user.index');
    }
}
