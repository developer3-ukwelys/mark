<html>
    <body>
        <?php
        class Car{
            public $name;
            public $price;

            function set_name($name){
                $this ->name = $name;  
            }
            function set_price($price){
                $this->price = $price;
            }   
        }

        $name =new Car();
        $name->set_name("volvo");

        $price =new Car();
        $price->set_price("uhs20000");

        echo  $name->name . "----" . $price->price . "<br>"; /**repet it for each statement */
        $name =new Car();
        $name->set_name("Benz");
        $name =new Car();
        $name->set_name("toyota");
        $name = new Car();
        $name->set_name("chevelot");
        echo $name->name . "<br>";
        ?>

        <br><br>

        <?php
          /**CONSTRUCT */
        class Machine{
            public $name;
            public $priice;

            function __construct($name,$price){
                $this->name = $name;
                $this->price =$price;
            }
             function get_name(){
                 return $this->name;
             }   
             function get_price(){
                 return $this->price;
             }
            }

            $name = new Machine("volvo","Uhs20000");
            echo $name->name . "---";
            echo $price->price . "<br>";
        ?>
        <br><br>

        <?php
           /**DESTRUCT */
        class Fruit {
            public $name;
            public $color;
          
            function __construct($name) {
              $this->name = $name;
            }
            function __destruct() {
              echo "The fruit is {$this->name}.";
            }
          }
          
          $apple = new Fruit("Apple");
        ?>
        <br><br>

        <?php
        /**ACCESS MODIFIERS */
        class Eatables {
            public $label;
            public $test;
            public $weight;
          
            function set_label($n) { 
              $this->label = $n;
            }
            protected function set_test($n) { 
              $this->color = $n;
            }
            private function set_weight($n) {
              $this->weight = $n;
            }
          }
          
          $mango = new Eatables();
          $mango->set_label('Mango'); 
          echo $label->label . "<br>";
          $mango->set_test('Yellow'); 
          $mango->set_weight('300'); 
        ?>
        <br><br>

        <?php
        /**inheritance1 */
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            protected function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
          }
          
          class Strawberry extends Fruit {
            public function message() {
              echo "Am I a fruit or a berry? ";
            }
          }
          
          // Try to call all three methods from outside class
          $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
          $strawberry->message(); // OK. message() is public
          $strawberry->intro(); // ERROR. intro() is protected
        ?>
        <br>
        <?php
        /** inheritance to */
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color;
            }
            protected function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
          }
          
          class Strawberry extends Fruit {
            public function message() { 
              echo "Am I a fruit or a berry? ";
              // Call protected method from within derived class - OK
              $this -> intro();
            }
          }
          
          $strawberry = new Strawberry("redberry", "red"); // OK. __construct() is public
          $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
        ?>

        <br><br>
        <?php
        /**constants */
        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
            public function byebye() {
              echo self::LEAVING_MESSAGE;
            }
          }
          
          $goodbye = new Goodbye();
          $goodbye->byebye();
        ?>
    </body>
</html>