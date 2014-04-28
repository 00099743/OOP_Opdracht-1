<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
       error_reporting(off);
       //Kijkt of er waardes wat je ingetyped heb//
       if(isset($_POST['Getal1'])){
       
      include 'Getal.php';

       }
       elseif(isset($_POST['Miles']) || ($_POST['Meter'] ))
       {
         include 'Afstand.php';
       }
       else
       {
          include 'Form.php'; 
       }
?> 
    </body>
</html>
