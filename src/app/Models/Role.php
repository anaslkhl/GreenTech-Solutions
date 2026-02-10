<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name'];


}









interface workable {
    public function work();
}




class user implements workable{
    private string  $password ;

    public function setPassword($pass){
        if(count($pass)>8) $this->password = $pass;
    }

    public function work()
    {
        return "worked";
    }
}


