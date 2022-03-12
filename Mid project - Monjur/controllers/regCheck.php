<?php 
session_start();
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $degree = $_REQUEST['degree'];
    $address = $_REQUEST['address'];
    if($username != null && $password != null && $email != null)
    {
        // if($username == $password)
        // {
            $user = ['id' => $id, 'username' => $username, 'password' => $password, 'email' => $email, 'dob' => $dob, 'gender' => $gender, 'degree' => $degree, 'address' => $address];
            $_SESSION['user'] = $user;
            $user = $id."|".$username."|".$password."|".$email."|".$dob."|".$gender."|".$degree."|".$address;
            $file = fopen('../models/user.txt','w');
            fwrite($file, $user);
            header('location: views/login.php');
        // }
        // else
        // {
        //     echo "invalid user";
        // }
    }
    else
    {
        echo "null submission";
    }
}
?>