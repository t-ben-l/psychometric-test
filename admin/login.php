<?php

$email  = $_POST['email'];
$password = $_POST['password'];

 $host = "localhost";
           
require ('connect.php');
      
$db = new connect();
$conn = $db->get_conn();
                $sql = "select * from accounts where email = '$email' and pass = '$password' ";
                $result = mysqli_query ($conn,$sql);
                    
                if ($row = mysqli_fetch_array($result))
                    
                {
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['pass'] = $password;
                    $_SESSION['vkey'] = $row['vkey'];
                    header('Location:user.php');
                }


if (isset($_POST['adminsub']))
    
{
      $sql = "select * from admin where email = '$email' and pass = '$password' ";
                $result = mysqli_query ($conn,$sql);
                    
                if ($row = mysqli_fetch_array($result))
                    
                {
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['pass'] = $password;
                    header('Location:admin.php');
                }
 
    
}
else 
    
{
    
    echo 'user un available';
}
        



?>