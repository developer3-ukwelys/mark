<html>
    <body>
        <?php
        $keys = array(
            "field1"=>"first",
            "field2"=>"second",
            "field3"=>"third"
        );
        $values = array(
            "field1value"=>"dinosaur",
            "field2value"=>"pig",
            "field3value"=>"platypus"
        );
        echo  $keys["field1"] . "-" . $values["field1value"] . "<br>";
        echo  $keys["field2"] . "-" . $values["field2value"] . "<br>";
        echo  $keys["field3"] . "-" . $values["field3value"];
        ?>
    </body>
</html>