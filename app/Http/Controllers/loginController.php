<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
class loginController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function index(){
        return view('main');
    }
    public function user1(){
        return view('mainUser1');
    }
    public function register(){
        $courses=Course::all();
        return view('register',compact('courses'));
    }
    public function students(){
        return view('students');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|string',
            'password' => 'required|string'
        ]);
        $user=User::where('name',$request->name)->where('password',$request->password)->first();
        if($user){
            auth()->login($user);
           if($user->id==1){
               return redirect('home');
           }else if($user->id==2){
                return redirect('main');
           }else{
                return redirect('students');
           }
            
        }else{
            return redirect('/')->with('error','name or password is wrong');
        }
       
    }
}
