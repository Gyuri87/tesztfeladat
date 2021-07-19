<?php


namespace App\Http\Table;


use App\Models\User;

class UserTable
{
    public function getAllUsers(){
        return User::get();
    }

    public function getUserById($id){
        return User::find($id);
    }
}
