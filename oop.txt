<?php

  $obj = new main();
  $text = "my text";
  $obj->printthis($text);
  
  $array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);

  class main {

    public function __construct() {

      echo 'hello i\'m an Object </br>';

    }

    public function printthis($text) {
      echo '<h1>print function demo </h1>';
      print($text);
      echo '<hr>';
    }

    public function printArray($array) {
      echo '<h1>array print function</h1>';
      print_r($array);
      echo '<hr>';
    }
    
    public function __destruct() {

      echo '</br> I\'m Done';

    }


  }



?>
