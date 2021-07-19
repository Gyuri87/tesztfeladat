<?php


namespace App\Http\Logic;


use App\Http\Table\EventTable;

class EventLogic
{
    private $eventTable;

    public function __construct(EventTable $eventTable)
    {
        $this->eventTable = $eventTable;
    }

    public function getEvent(){
        return $this->eventTable->selectAllEvent();
    }
}
