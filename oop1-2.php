<html>
    <body>
        <?php
        class product{
            public $name;
            public $description;
            public $price;
            
            function __construct($name,$description,$price){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            }
            
            function get_name($name){
                return $this->name;
            }
            function get_decription($description){
                return $this->description;
            }
            function get_price($price){
                return $this->price;
            }
                
            }

        class product1 extends product{
            public $value;

            function set_value($value){
                $this->value = $value;
            }
            function get_value(){
                return $this->value;
            }
        
        }

        class product2 extends product{
            public $value;

            function set_value($value){
                $this->value = $value;
            }
            function get_value(){
                return $this->value;
            }
        
        }
        $name = new product ("IPHONE","12","190000USD");
        echo $name->name . "----";
        $description = new product ("iphone","12","190000USD");
        echo $description->description . "----";
        $price = new product ("iphone","12","190000USD");
        echo $price->price . "<br>";
        

        $name = new product ("IPHONE","12PRO","290000USD");
        echo $name->name . "----";
        $description = new product ("iphone","12PRO","290000USD");
        echo $description->description . "----";
        $price = new product ("iphone","12PRO","290000USD");
        echo $price->price . "<br>";

        $name = new product ("IPHONE","X","290000USD");
        echo $name->name . "----";
        $description = new product ("iphone","X","290000USD");
        echo $description->description . "----";
        $price = new product ("iphone","12PRO","450000USD");
        echo $price->price;

        ?>

    </body>
</html>