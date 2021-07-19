<?php


namespace App\Http\Logic;


use App\Http\Table\EventUserTable;

class EventUserLogic
{
    private $eventUserTable;
    public function __construct(EventUserTable $eventUserTable)
    {
        $this->eventUserTable = $eventUserTable;
    }

    public function buyOneTicket($id){
        return $this->eventUserTable->buyOneTicket($id);
    }
}
