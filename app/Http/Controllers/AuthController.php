<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view('register');
    }
    public function register(UserRequest $userRequest,User $user)
    {
        $user->name =$userRequest->name;
        $user->phone=$userRequest->phone;
        $user->address=$userRequest->address;
        $user->password =Hash::make($userRequest->password);
        $user->email = $userRequest->email;
        $user->save();
        return redirect()->route('formLogin');
    }
    public function showFormLogin()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
             return view('layout.master');
        }else{
            session()->flash('Login_error', 'Tài khoản hoặc mật khẩu không chính xác');
            return redirect()->route('formLogin');
        }
    }
    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
