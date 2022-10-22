<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function actionRegister(Request $request){
        $email = User::where('email', $request->email)->first();
        if($email){
            session()->flash('error', 'Email is already exists.');
            
            return redirect('/register');
        }
        
        if($request->password == $request->confirm_password){
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Berhasil Membuat Akun!');
            
            return redirect('/login');

        }else{
            session()->flash('error', 'Ada yang salah nich!');
            
            return redirect('/register');
        }
    }

    public function loginView(){
        if(Auth::check()){
            return redirect('/');
        } else{
            return view('login');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            session()->flash('error', 'Email atau Password
            
            Salah');
            
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        session()->flash('success', 'Berhasil Logout');
        return redirect('/');
    }
}
