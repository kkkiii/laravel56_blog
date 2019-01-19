<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash ;
class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['logout']
        ]);
        $this->middleware('guest',[
            'only'=>['login','store']
        ]);
    }


    public function login()
    {
        //
        return view('login.login');
    }
    public function store(Request $request)
    {
        $data = $this->validate($request,[

            'email'=>'required|email',
            'password'=>'required|min:5',
        ]) ;


         $user = User::where('email',  $data['email'] )->first();





         if(Hash::check (  $data['password'],$user->password))
         {
             Auth::login($user) ;
             session()->flash(
                 'success','登陆成功'
             ) ;
             return redirect('/' ) ;
         }
             else
             {
                 session()->flash(
                     'success','登陆失败'
                 ) ;
                 return back() ;
             }



    }
    public function logout()
    {
       Auth::logout() ;
       session()->flash(
           'success','已经退出了'
       ) ;
       return redirect('/') ;
    }
}
