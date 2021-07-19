<?php


namespace App\Http\Controllers;


use App\Http\Logic\UserLogic;
use Illuminate\Support\Facades\Auth;

class MyEvents extends Controller
{
    private $userLogic;

    public function __construct(UserLogic $userLogic)
    {
        $this->middleware('auth');
        $this->userLogic = $userLogic;
    }

    public function index(){

        return view('events',[
            'myEvents' => $this->userLogic->getUserById(Auth::id())->events
        ]);
    }
}
