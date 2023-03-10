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
    public function index()
    {

        if (auth()->user()->role == 1) {
            // dd(auth()->user()->with('patient')->first());
            return view('patient.home');
        } else if (auth()->user()->role == 2) {
            return view('doctor.home');
        } else if (auth()->user()->role == 0 && auth()->user()->is_admin == true) {
            return view('admin.home');
        } else {
            return back()->with('error', "The application cannot proceed because it cannot determine your role");
        }
    }
}
