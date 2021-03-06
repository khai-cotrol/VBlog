<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserResquest;
use App\Http\Requests\UserRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        if (!$request->hasFile('image')){
            $path = $user->img;
        }else{
            $path = $request->file('image')->store('images','public');
        }
        $data =[
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'img'=>$path
        ];
        DB::table('users')->where('id',$id)->update($data);
        return redirect()->route('myProfile',Auth::id());
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
        $user->delete();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $text = $request->name;
        $users = User::where('name', 'LIKE' , '%' . $text . '%')->get();
        return view('admin.user.list', compact('users'));
    }
    public function editRole($id)
    {
        $user= User::find($id);
        return view('admin.user.updateRole',compact('user'));

    }
    public function updateRole(Request $request,$id)
    {
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('user.list');
    }

}
