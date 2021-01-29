<?php
class User{
    public $name;
    public $login;
    public $password;

    function __construct($name, $login, $password){
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;

    }
    function __destruct(){
        echo "Пользователь ->".$this->login." - удален <br>";
    }

    function showInfo(){
        echo "<hr>Name: {$this->name}<br>";
        echo "Login: {$this->login}<br>";
        echo "Password: {$this->password}<br>";
    }

}