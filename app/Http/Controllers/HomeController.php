<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $userData = session('userlogin')['dflogin'][0] ?? [];
        $nip = $userData['nip'] ?? '';
        $namalengkap = $userData['nm_lengkap'];

        return view('home', compact('nip','namalengkap'));
        }

    public function tabel(Request $request)
    {
        $data['title'] = 'Tabel';
        return view('pages/table', $data);
    }
}
