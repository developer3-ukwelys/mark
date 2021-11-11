<html>
    <body>
        <?php
        $sum = 0;
        $a = array( 0, 1, 2, 3, 4, 5, 6 );
        $length = count($a);
        for($x=0;$x<6;$x++){
            echo $a[$x] . ",";
        }
        $sum =+ $a[$x];
        echo "<br>" . "sum of the above numbers is :" . $sum;

      /** foreach( $a as $element ) {
            $sum += $element;
      }
      **/
        ?>
    </body>
</html>