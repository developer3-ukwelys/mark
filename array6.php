<html>
    <body>
        <?php
        $a = array(
                "a"=>"a",
                "b"=>"b",
                "c"=>"c",
                "d"=>"d",
                "e"=>"e"
        );

        foreach($a as $x =>$x_value){
            echo "key =" . $x . "--" . "value =" . $x_value . "<br>";
        }
        ?>
    </body>
</html>