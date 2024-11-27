<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function index()
{
    if (auth()->check()) {
        $pengumpulans = Pengumpulan::all();
        return view('home', compact('pengumpulans'));
    } else {
        return redirect()->route('login');
    }
}

protected function redirectPath()
{
    // Ambil jabatan user yang baru saja terdaftar
    $status = auth()->user()->status;

    // Redirect berdasarkan jabatan
    if ($status === 'manager') {
        return 'pengumpulan/create'; // Halaman admin
    } elseif ($status === 'karyawan') {
        return ''; // Halaman karyawan
    }

    // Default redirect jika tidak cocok
    return '/home';
}
}
