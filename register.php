<?php 

include_once 'simpleUserClass.php';
require_once 'userMapper.php';
session_start();


if (isset($_POST['submit'])) {
    $register = new DataUser($_POST);
    $register->insertData();
} else {
    header("Location:index.php");
}

class DataUser{
    private $username = "";
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];
    }

    public function insertData()
    {
        //prolly a bug here userEmail
        $user = new SimpleUser($this->username,$this->password, 0, $this->email);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:index.php");
    }
}