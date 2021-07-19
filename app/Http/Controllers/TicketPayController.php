<?php


namespace App\Http\Controllers;


use App\Http\Logic\EventUserLogic;
use Illuminate\Http\Request;
//A controller a feladata csak az adatok továbbítása a view felé
class TicketPayController extends Controller
{

    private $eventUserLogic;

    public function __construct(EventUserLogic $eventUserLogic)
    {
        $this->middleware('auth');
        $this->eventUserLogic = $eventUserLogic;
    }

    public function payment(Request $request){
        return view('succesfully',['msg' => $this->eventUserLogic->buyOneTicket($request->id)]);
    }
}
