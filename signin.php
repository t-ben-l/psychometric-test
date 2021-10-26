<html>
    <head>
    
    </head>

    <style>
        body{
            
            position: absolute;
            width: 100%;;
            height: 600px;
            
            background-color: aqua;
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
            height: 9%;
        }
        #n
        {
            top: 18%;
        }
        #ss
        {
            top: 32%;
        }
        #t
        {
            top: 45%;
            
        }
        #p
        {
            top: 60%;
        }
        #p2
        {
           
            top: 75%; 
        }
         #s
        {
            top: 90%;
        }
        #signup
        {
            
            position: absolute;
            top: 92%;
            color: white;
            text-decoration: none;
            font-size: 20px;
        }
        #warning 
        {
            background-color: brown;
            font-size: 17px;
        }
        
        @media only screen and (max-width: 750px)
        {
             .log
        {
            position: absolute;
            width: 98%;
            height: 90%;
            top: 10%;
            left: 1%;
            background-color: black;
        }
        
            
        }
    </style>
    <body>
        
        <section class = "log">
            <form action="signin.php" method="post" > 
        <section id = "textbox">
 Sign up  here 
            
            <?php
            
            if (isset ($_POST['submit']))
            {
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                
                if ($password != $password2)
                    
                    echo ' 
                         <span id = "warning">   passwords dont match </span> ';
                else { 
               
             require ('connect.php');
$db = new connect();
$conn = $db->get_conn();
                //sanitizing the data
                
                $name = $conn->real_escape_string($name);
                $surname = $conn->real_escape_string($surname);
                $email = $conn->real_escape_string($email);
                $password = $conn->real_escape_string($password);
                $status = 0;
                    //verification key
                $vkey = md5(time().$name);
                $sql = "insert into accounts (name,surname,email,pass,vkey,status) values ('$name','$surname','$email','$password','$vkey','$status')";
                
                if ($conn->query($sql))
                    
                   { 
                    
                    $to = $email;
                    $subject = "Psychometric test: Email verification";
                    $message ="<a href = 'http:://localhost /testing/verify.php?vkey= $vkey'> Register your account </a> ";
                    
                    $headers = "From: psychometrictest@thamu.com \r\n";
                    $headers .= "MIME-Version: 1.0"."\r\n";
                    $headers .= "Content-type:test/html;charset-UTF-8"."\r\n";
                    
                  //  mail($to,$subject,$message,$headers);
                    header('Location:emailsent.php');
                    
                    
                }
                    else 
                      
                    {
                        die();
                    }
                      
                
            }
            }
            ?>
                </section>
                
     <input type="text"  name = "name" class = "inp" id = "n" placeholder="name">
     <input type="text"  name = "surname" class = "inp" id = "ss" placeholder="surname" >
     <input type="email"  name = "email" class = "inp" id = "t" placeholder="email" >
        <input type="password" name ="password"  class = "inp" id  = "p" placeholder="password">
        <input type="password" name ="password2"  class = "inp" id  = "p2" placeholder="re-enter password">
            
        <input type="submit" name="submit" class = "inp" id  = "s">
         </form>
            
        </section>
        
         
    
    </body>

</html>