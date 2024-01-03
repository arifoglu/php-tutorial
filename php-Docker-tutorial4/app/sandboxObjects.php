<?php

//classes

class User {

    // public $email;
    // public $name;

    public $email;
    public $name;


    public function __construct($name ,$email){
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        echo "the user logged in " ;
    }
}

// $userOne = new User();
// 
// $userOne->login();
// echo $userOne->name;

$userTwo = new User('dan' ,"can@gmail.com");
echo $userTwo->name ;
echo $userTwo->email ;


?>