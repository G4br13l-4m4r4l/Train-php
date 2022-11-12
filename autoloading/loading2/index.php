<?php
spl_autoload_register(function($classe){
    require "red2/$classe.php";
});

$Add = new Conta();
$Add->Adicionar(2,3);
