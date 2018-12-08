<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    public $polumjer;
    
    public function IzracunajOpseg($polumjer){
        
      $rezultatOpseg= $this->polumjer*2*3.14;
       return $rezultatOpseg;
    }
}
