<?php
          $getal1=$_POST['Getal1'];
          $getal2=$_POST['Getal2'];
//Nieuwe klasse Getal//
       class Getal {

    // define properties
    private $getal1;
             
    private $getal2;
    
    private $getal3;

   
    // define methods
    
    // Het maken van een contructer
     function __construct($getalin1,$getalin2) {
        $this->getal1=abs($getalin1);
        $this->getal2=abs($getalin2);
    }
//Function om de twee absolute getallen te pakken en daar alles tussen uit te rekennen en bij elkaar op tellen
    function absoluteGetal() {
//Hier reken je wat je er tussen kan berekenen door middel van the tekst te minnen en te plussen
 if($this->getal1 < $this->getal2){ 
//         $this->getal1++; 
         $this->getal2--; 
 }
 else {
      $this->getal1--; 
//      $this->getal2++; 
 }
              // Hier heb je een do while waar hij berekent wat er allemaal tussen zit en de uitkomst
                if($this->getal1 < $this->getal2){   
                do {
                echo $this->getal1++." + ";
                $this->getal3 += $this->getal1;
                } 
                while ($this->getal1 < $this->getal2);
                }
                else{
                do {
                echo $this->getal2++."+";
               $this->getal3 += $this->getal2;
                } 
                while ($this->getal1 > $this->getal2);
                }  
                  echo " = ".$this->getal3;
                }
  
    
     }
    
       //Hier gebruik je een new getal met de cijfers die je ingevuld hebt.
       $person1=new Getal($getal1,$getal2);
       //Hij voert de functie absoluteGetal uit
       $person1 -> absoluteGetal();
       