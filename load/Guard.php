<?php
session_start();


class Guard{
    private $user = "admin";
    private $pass = 123;

    public function __construct($u, $p){
        if($this->user==$u && $this->pass==intval($p) ){
            $_SESSION['login'] = 'login realizado com sucesso';
            header("Location: load/User.php");
            exit;
        }

        $_SESSION['warning'] = 'Login invalido!';
        header("Location: index.php");
        exit;
    }

}
