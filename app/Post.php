<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){

return $this->belongsTo('App\User'); //relacion uno a uno. unpost a un usuario
    }
}
