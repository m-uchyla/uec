<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    public function get(){

        $users = DB::table('users')->latest()->simplePaginate(5);

        return view('users', ['users' => $users]);
    }

    public function getProfile(){

        $user = DB::table('users')->where('id',Auth::id())->first();

        return view('profile', ['user' => $user]);
    }

    public function edit(Request $request){
        $id = $request->input("userID");
        $user = DB::table('users')->where('id',$id)->first();
        return view('editUser',['user'=> $user]);

    }

    public function delete(Request $request){
        $id = $request->input("userID");
        $user = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('usersList');

    }

    public function update(Request $request){
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $role = $request->input('role');
        // $id = $request->input('id');

        // $data=array(
        //     "name"=>$name,
        //     "email"=>$email,
        //     "role"=>$role,
        // );
        $name = $request->input('name');
        $lastName = $request->input('lastName');
        $nick = $request->input('nick');
        $email = $request->input('email');
        $dateOfBirth = $request->input('dateOfBirth');
        $photo = $request->input('photo');
        $steamID = $request->input('steamID');
        $id = $request->input('id');
        $role = $request->input('role');

        $data=array(
            "name"=>$name,
            "lastName"=>$lastName,
            "nick"=>$nick,
            "email"=>$email,
            "dateOfBirth"=>$dateOfBirth,
            "photo"=>$photo,
            "steamID"=>$steamID,
            "role"=>$role
        );

        DB::table('users')->where('id',$id)->update($data);

        return redirect()->route('usersList');
    }

    public function updateProfile(Request $request){
        $name = $request->input('name');
        $lastName = $request->input('lastName');
        $nick = $request->input('nick');
        $email = $request->input('email');
        $dateOfBirth = $request->input('dateOfBirth');
        $photo = $request->input('photo');
        $steamID = $request->input('steamID');
        $id = $request->input('id');

        $data=array(
            "name"=>$name,
            "lastName"=>$lastName,
            "nick"=>$nick,
            "email"=>$email,
            "dateOfBirth"=>$dateOfBirth,
            "photo"=>$photo,
            "steamID"=>$steamID,
        );

        DB::table('users')->where('id',$id)->update($data);

        return redirect()->route('profile');
    }
}