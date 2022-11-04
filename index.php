<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php
    class Bike {
        public $model = 'Yamaha';
        public $name = ' R1 ';
        public $speed;
        public $gear = 5;
        public $wheel = 2; 
        public $color = 'yellow';
        public $clinder = 2;  

        function __construct($speed){
            $this->speed=$speed;
        }
        
        function move(){
            echo "<br>";
            echo "I am moving , with current speed " . $this->speed . " and the color of bike is " . $this->color  ;
        }
    }

    $bike = new Bike(1000) ;
    echo $bike->move();



?>