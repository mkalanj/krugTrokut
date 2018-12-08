<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Triangle extends Model
{
     public $a;
      public $b;
     public $c;
    
    public function IzracunajPovrsinuTrokuta($a, $b){
        
      $rezultatTrokutPovrsina= ($this->a * $this->b)/2;
       return $rezultatTrokutPovrsina;
    }
    
    
        public function IzracunajOpsegTrokuta($a, $b, $c){
            
       $rezultatTrokutOpseg= $this->a + $this->b + $this->c;
       return $rezultatTrokutOpseg;
    }
}
