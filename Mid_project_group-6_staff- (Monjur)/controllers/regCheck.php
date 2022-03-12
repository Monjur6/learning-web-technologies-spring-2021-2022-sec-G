<?php 
session_start();
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    if($username != null && $password != null && $email != null)
    {
            $user = ['id' => $id, 'username' => $username, 'password' => $password, 'email' => $email, 'dob' => $dob, 'address' => $address];
            $_SESSION['user'] = $user;
            $user = $id."|".$username."|".$password."|".$email."|".$dob."|".$address;
            $file = fopen('../models/user.txt','w');
            fwrite($file, $user);
            $src = $_FILES['myfile']['tmp_name'];
            $des = 'upload/'.$_FILES['myfile']['name'];
            header('location: views/login.php');
    }
    else
    {
        echo "null submission";
    }
}
?>