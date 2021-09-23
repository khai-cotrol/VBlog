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
//        $path= $userRequest->file('image')->store('images','public');
//        $user->img = $path;
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
             return redirect()->route('post.list');
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

    public function updateProfile(Request $request,User $user)
    {

        $user->name =$request->name;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->email = $request->email;
        $user->save();



    }
}
