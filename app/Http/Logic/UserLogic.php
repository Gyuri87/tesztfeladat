<?php


namespace App\Http\Logic;


use App\Http\Table\UserTable;

class UserLogic
{
    private $userTable;

    public function __construct(UserTable $userTable)
    {
        $this->userTable = $userTable;
    }

    public function getUsers(){
        return $this->userTable->getAllUsers();
    }

    public function getUserById($id){
        return $this->userTable->getUserById($id);
    }
}
