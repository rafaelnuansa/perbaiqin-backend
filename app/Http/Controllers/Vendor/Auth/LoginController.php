<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/vendor/dashboard';

    public function __construct()
    {
        $this->middleware('guest:vendor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('vendor.auth.login');
    }

    protected function guard()
    {
        return auth()->guard('vendor');
    }
}
