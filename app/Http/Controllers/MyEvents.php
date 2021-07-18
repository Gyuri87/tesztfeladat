<?php


namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyEvents extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('events',[
            'myEvents' => User::find(Auth::id())->events
        ]);
    }
}
