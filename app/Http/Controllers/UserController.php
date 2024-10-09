<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Dosen;

class UserController extends Controller
{
    public function index()
    {
        return view ("users.beranda");
    }

    public function create()
    {
        return view ("");
    }
}
