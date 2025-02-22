<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Auth;
use Hash; 
use Redirect;
use Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function setlogin(Request $request)
    { 
        $client = new \GuzzleHttp\Client();
        $nip = $request->input('nip');
        $password = $request->input('password');

        $dfnipw = [
            'nip' => $nip,
            'password' => $password,
        ];  

        $respon1 = $client->post('http://localhost/login-api/login.php', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => $dfnipw,
        ]);

        $jsnrslt1 = $respon1->getBody()->getContents();
        $json1 = json_decode($jsnrslt1, true); 

        if ($json1['success'] == 1) { 
            $dflogin = $json1['dflogin'][0];  
            Session::forget('userlogin'); 
            session(['userlogin' => $json1]); 
            
            // Cek apakah user sudah ada
            $user = User::where('nip', $nip)->first();

            if (!$user) {
                // Simpan user tanpa hashing ulang password
                $user = new User();
                $user->nip = $nip;
                $user->password = $dflogin['password']; // Gunakan password dari API tanpa hashing
                $user->save();
            }

            // Gunakan Auth::login() untuk login langsung tanpa hashing
            Auth::login($user);

            DB::table('m_user')->updateOrInsert(
                ['nip' => $nip],  // Cek berdasarkan nip
                ['updated_at' => now()] // Perbarui waktu login terakhir
            );

            return redirect('home')->with('success', $json1['message']); 
            
        } else {
            return redirect()->route('login')->with('error', $json1['message']);
        }
    }
}
