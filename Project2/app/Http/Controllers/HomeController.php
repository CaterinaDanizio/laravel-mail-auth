<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\Mail\TestMail;

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
        // Mail utente collegato
        $mail = Auth::user()-> email;
        // dd($mail);

        Mail::to($mail)->send(new TestMail($mail));

        return view('home');
    }
}
