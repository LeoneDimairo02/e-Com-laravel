<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller

{
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or password not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/product');
        }
    }
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
}
