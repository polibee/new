<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ],[
            'name.required' => '名称不能为空',
            'name.unique' => '名称已存在',
            'name.max' => '名称最多50个字符',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'email.unique' => '邮箱已存在',
            'email.max' => '邮箱最多255个字符',
            'password.required' => '密码不能为空',
            'password.confirmed' => '密码不一致',
            'password.min' => '密码最少6个字符',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success','注册成功');
        return redirect()->route('users.show',$user);
    }
}
