<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect;

class UserController extends Controller
{
    protected $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    public function index(){

        return view('index');
    }
    public function signup(){

        return view('signup');
    }
    public function createsave(){

        User::create(
            $this->request->except('_token')
        );
        return Redirect::route('home')->with('alert', 'Your application will be validated. we will send you an email to verify your email address. Thank you!');
        
    }
    public function login(){

        return view('login');
    }
}
