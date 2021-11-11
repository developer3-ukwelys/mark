<html>
    <body>
        <?php
        $a = array( "a" => array( "b" => "0",
                                  "c" => "1"),
                    "b" => array( 
                                  "e" => "2", 
                                  "o" => array("b" => "3")
                    )      
        );

        echo "the number". $a['b']['o']['b'];

        ?>
    </body>
</html>