<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
      if(isset($_POST['Getal1'])){
          $getal1=$_POST['Getal1'];
          $getal2=$_POST['Getal2'];

       class Getal {

    // define properties
    public $getal1;
             
    public $getal2;
    
    public $getal3;

   
    // define methods
    
     function __construct($getalin1,$getalin2) {
        $this->getal1=$getalin1;
        $this->getal2=$getalin2;
    }

    function absoluteGetal() {


         $this->getal1; 
         $this->getal2; 
         
                if($this->getal1 < $this->getal2){   
                do {
                echo $this->getal1++." + ";
                echo $this->getal3 += $this->getal1;
                } 
                while ($this->getal1 < $this->getal2);
                }
                else{
                do {
                echo $this->getal1--."+";
                echo $this->getal1+= $this->getal3;
                } 
                while ($this->getal1 > $this->getal2);
                }  
                }
                        
    
    
     }
       
       $person1=new Getal($getal1,$getal2);
       $person1 -> absoluteGetal();
       }
       else
       {
       echo '<form action="index.php" method="post">';
       echo 'Getal1: <input type="text" name="Getal1"  /><br>';
       echo 'Getal2: <input type="text" name="Getal2"  /><br>';
       echo '<input type="submit" value="Submit">';
       echo "</form>";
       }









//
//      class Getal2 {
//
//    // define properties
//    private $getal1;
//             
//    private $getal2;
//
//   
//    // define methods
//    
//    private function __construct($name,$job,$age) {
//        $this->getal1=$name;
//        $this->getal2=$job;
//    }
//
//    public function changeJob($newjob) {
//
////        $this->job['job'] = $newjob;
//         $this->job = $newjob;// Change the person's job
//         echo " Your job is now ".$this->job." " ;
//
//    }
//
//    public function happyBirthday() {
//
//        $this->age++; // Add 1 to the person's age
//        echo " Your age is now".$this->age." "       
//;
//
//    }
//       }
?> 
    </body>
</html>
