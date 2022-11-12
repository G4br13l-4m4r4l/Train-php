<?php
class Person{
    private int $age=0;

    public function __construct($a){
        $this->age = $a;
    }

    public function show(){
        echo"IDADE: $this->age";
    }
}