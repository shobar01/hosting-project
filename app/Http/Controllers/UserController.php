<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function tabel(Request $request)
    {
        $data['title'] = 'Tabel';
        return view('pages/table', $data);
    }
}
