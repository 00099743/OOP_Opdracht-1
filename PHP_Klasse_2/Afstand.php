<?php
 $Miles=$_POST['Miles'];
          $Meter=$_POST['Meter']; 
          //Nieuwe Klas afstand 
      class Afstand {

    // define properties
    private $meter;
             
    private $miles;

   
    // define methods
    //Constructer
        function __construct() {
        $this->meter=0;
        $this->miles=0;
    }
    
   
    
    function setMeters(){
                //Omrekken naar Meter
                 $miles=$this->meter * 1609;
                echo "Meter:".$miles." ";
            }
    
    function SetMiles(){
                //Omrekennen naar Miles
               $meter=  $this->miles / 1609;
               echo "Miles:".$meter." ";
            }
            
             function GetMiles($MilesANT){
                 //Laat miles zien
              $this->meter = $MilesANT;
                echo "Miles:".$this->meter." ";
            }
            
            
             function GetMeters($MetersANT){
                 //Laat meter zien
                
               $this->miles = $MetersANT;
                echo "Meter:".$this->miles." "; 
            }
   
       }
        //Hier gebruik je een new getal met de cijfers die je ingevuld hebt.
        //Hij voert de functies uit
        $person1=new Afstand();
        
        $person2=new Afstand();
        
        $person1 -> GetMiles($Miles);
        
        $person2 -> GetMeters($Meter);
        
        $person1 -> setMeters();
       
        $person2 -> SetMiles();
         
        
           
        
           