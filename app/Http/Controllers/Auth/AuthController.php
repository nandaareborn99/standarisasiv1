<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function prosesLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('admin/beranda');
        } else {
            return back();
        }
    }

    public function prosesLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
