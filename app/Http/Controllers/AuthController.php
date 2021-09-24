<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Post;
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

    public function edit($id)
    {
        $user = User::find($id);
        return view('customer.update',compact('user'));
    }

    public function updateProfile(Request $request,$id)
    {
        $user = User::find($id);
        $path= $request->file('image')->store('images','public');
        $user->img = $path;
        $user->name =$request->name;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('post.list');
    }
    public function myFrofile($id)
    {
        $allPost = Post::all()->where('user_id',$id);
        $users =User::all();
        $user = User::find($id);
        return view('customer.profile',compact('allPost','user','users'));
    }
    public function index()
    {
        $users = User::all();
        return view('admin.user.list',compact('users'));
    }
    public function yourProfile($id)
    {
        $allPost = Post::all()->where('user_id',$id);
        $users =User::all();
        $user = User::find($id);
        return view('customer.yourProfile',compact('allPost','user','users'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->posts()->delete();
        $user->comment()->delete();
        $user->delete();
        return redirect()->back();
    }

}
