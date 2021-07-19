<?php


namespace App\Http\Table;


use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventUserTable
{
    public function buyOneTicket($id){
        try{
            DB::table('event_user')->insert([
                'user_id'=>Auth::id(),
                'event_id'=>$id,
            ]);
            $message = true;
        }catch (QueryException $e){
            $message = false;
        }

        return $message;
    }
}
