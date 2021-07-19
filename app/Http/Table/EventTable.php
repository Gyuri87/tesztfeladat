<?php


namespace App\Http\Table;


use App\Models\Event;

class EventTable
{
    public function selectAllEvent(){
        return Event::get();
    }
}
