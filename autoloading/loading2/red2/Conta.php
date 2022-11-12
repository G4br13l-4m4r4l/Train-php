<?php
interface Inform{
    public function Adicionar($x, $y);
}

class Conta implements Inform{
    private int $id;
    private $result;
    public function __construct(){
        $this->id = rand(1,100);
        echo "<br/>ID: $this->id <hr/>";
    }

    public function Adicionar($x,$y){
        $this->result = $x+$y;
        echo "$this->result";
    }
}