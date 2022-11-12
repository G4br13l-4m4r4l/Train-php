<?php
spl_autoload_register(function($class){
    require "load/".$class.".php";
});