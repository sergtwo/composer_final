<?php

 require ('../vendor/autoload.php');

 use App\Hello;
 
 $sayHello = new Hello;
 
 echo $sayHello->talk();

?>