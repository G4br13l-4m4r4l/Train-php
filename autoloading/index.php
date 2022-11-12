<?php 
spl_autoload_register(function($name){
    require "req/$name.php";
});
$state = new Person(24);
$state->show();