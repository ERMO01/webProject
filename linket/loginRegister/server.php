<?php 
$username="";
$email="";
$errors=array();

    $db = mysqli_connect('localhost', 'root', '' , 'registration');

    if(isset($_POST['register'])){
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);

        if(empty($username)){
            array_push($errors, "Username is required");
        }
        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password_1)){
            array_push($errors, "Password is required");
        }
        if($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }
        if(count($errors)==0){
            $password = md5($password_1);//encrypts password before storing in database
            
            $sql="INSERT INTO USERS (username, email, passwordd) VALUES ('$username','$email','$password')";
            mysqli_query($db, $sql);
        }
    }


?>