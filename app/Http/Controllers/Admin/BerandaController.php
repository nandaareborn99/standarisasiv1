<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda.show');
    }
}
