<?php

namespace App\Http\Controllers;

use App\Http\Logic\EventLogic;
use App\Http\Logic\UserLogic;

class HomeController extends Controller
{

    private $userLogic;
    private $eventLogic;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserLogic $userLogic, EventLogic $eventLogic)
    {
        $this->middleware('auth');
        $this->userLogic = $userLogic;
        $this->eventLogic = $eventLogic;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
                'events' => $this->eventLogic->getEvent(),
                'users' => $this->userLogic->getUsers(),
            ]);
    }
}
