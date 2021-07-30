<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function postlogin(Request $request){
        Auth::attempt($request->only('email', 'password'));
        if(Auth::check()){
            if(Auth()->user()->level == 1){
                return redirect('produk');
            }else{
                return redirect('home');
            }
        }else{
            return redirect('auth');
        }
    }
    public function register(){
        return view('auth/register');
    }

    public function postregister(Request $request){
        $model = new Login;
        $model->nama_lengkap = $request->nama_lengkap;
        $model->no_hp = $request->no_hp;
        $model->alamat_lengkap = $request->alamat_lengkap;
        $model->level = 2;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);

        
        Auth::attempt($request->only('email', 'password'));
        $model->save();
        return redirect('auth')->with('pesan', 'Account Success Create');
    }
    public function admin(){
        return "admin";
    }
    public function logout(){
        Auth::logout();
        return redirect('auth')->with('pesan', 'Success Logout');
    }
}
