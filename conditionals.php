<html>
    <body>

         <?php
         
         $unit ="";

         if($unit <= 50){

            echo " your bill is Rs.3.5/unit";
         }
         elseif( $unit <= 150){
             echo " your bill is Rs.4.00/unit";
         }
         elseif($unit <= 250){
             echo " your bill is Rs.5.20/unit";
         }
         else{ 
             echo "your bill is Rs.6.50/unit";
            }

         
         ?>

    </body>
</html>