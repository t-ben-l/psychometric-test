<html>
    <head>
    
    </head>

    <style>
        body{
            
            position: absolute;
            width: 100%;;
            height: 600px;
            
            background-color:darkcyan;
        }
        
        .log
        {
            position: absolute;
            width: 50%;
            height: 50%;
            top: 30%;
            left: 25%;
            background-color: black;
        }
        
        #textbox
        {
            position: absolute;
            width: 100%;
            text-align: center;
            height: 10%;
            font-size: 30px;
            color:white;
        }
        .inp
        {
        position: absolute;
            width: 98%;
            left: 1%;
            height: 15%;
        }
        #t
        {
            top: 25%;
            
        }
        #p
        {
            top: 45%;
        }
         #s
        {
            top: 70%;
        }
        #signup
        {
            
            position: absolute;
            top: 92%;
            color: white;
            text-decoration: none;
            font-size: 20px;
        }
    </style>
    <body>
        
        <section class = "log">
            <form action="" method="post" > 
        <section id = "textbox">
              Log in please  </section>
     <input type="email"  name = "email" class = "inp" id = "t">
        <input type="password" name ="password"  class = "inp" id  = "p">
        
            
        <input type="submit" name="adminsub" class = "inp" id  = "s">
         </form>
        </section>
        
         <?php
        
     
$db = new connect();
$conn = $db->get_conn();
if (isset($_POST['adminsub']))
    
{
$email  = $_POST['email'];
$password = $_POST['password'];
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
    
    </body>

</html>