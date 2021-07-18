<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function performers(){
        return $this->belongsToMany(Performer::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }
}