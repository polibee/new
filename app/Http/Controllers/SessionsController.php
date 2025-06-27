<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;


class SessionsController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','create','store');
        $this->middleware('guest')->only('create');
    }
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $credentials = request()->validate([
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials,request()->has('remember'))){
            session()->flash('success', '欢迎回来！');
            $fallback=route('users.show', Auth::user());
            return redirect()->route('users.show', [Auth::user()]);

        } else {
            session()->flash('danger', '邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }
    public function destroy()
    {
        Auth::logout();
        session()->flash('success','注销成功');
        return redirect('login');
    }
}
