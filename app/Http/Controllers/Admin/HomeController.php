<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('admin/index');
    }
    public function getLogin(){
        return view('admin/login');
    }
    public function postLogin(Request $request){
        $data = [
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'role_id' => 1,
        ];
        if(Auth::attempt($data)){
            return redirect("/admincp");
        }else{
            return back()->with('message', "Tài khoản hoặc mật khẩu không đúng!");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
