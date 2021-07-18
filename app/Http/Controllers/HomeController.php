<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User as Users;
use Illuminate\Foundation\Auth\User;
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
        return view('home',[
                'events' => Event::get(),
                'users' => Users::get(),
            ]);
    }
}
