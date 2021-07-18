<?php


namespace App\Http\Controllers;


use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TicketPayController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function payment(Request $request){

        $message = "";
        try{
            DB::table('event_user')->insert([
                'user_id'=>Auth::id(),
                'event_id'=>$request->id,
            ]);
            $message = true;
        }catch (QueryException $e){
            $message = false;
        }

        return view('succesfully',['msg' => $message]);
    }
}
