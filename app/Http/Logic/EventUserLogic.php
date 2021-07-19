<?php


namespace App\Http\Logic;


use App\Http\Table\EventUserTable;
// a Logic feladata, hogy ha logikaliag valamit módosítani kell az adathalmazon akkor ezt a feladatot látja el.
// Ha automatizált tesztet szeretnénk írni, akkor mindig a logikot kell tesztelni.
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
