<?php

namespace App\Http\Controllers;
use App\Circle;
use App\Triangle;
use Illuminate\Http\Request;

class GeometryController extends Controller
{
    public function Opseg($CirclePolumjer){
        $krug = new Circle();
        $polumjer = $krug->polumjer = $CirclePolumjer ;
        $opseg = $krug->IzracunajOpseg($polumjer);
        
      return response()->json([
          'type' => 'circle',
          'radius' => $polumjer,
          'surface' => $opseg,
          'circumference' => $opseg
      ]);
    }          
 public function Trokut($a, $b, $c){
        $trokut = new Triangle();
        $a = $trokut->a = $a ;
        $b= $trokut->b = $b ;
        $c = $trokut->c = $c ;
      
        $povrsina= $trokut->IzracunajPovrsinuTrokuta($a, $b);
        $opseg2 = $trokut->IzracunajOpsegTrokuta($a, $b, $c);
        
      return response()->json([
          'type' => 'triangle',
          'a' => $a,
           'b' => $b,
           'c' => $c,
          'surface' => $povrsina,
          'circumference' => $opseg2
      ]);
            
        
  
    }
}
