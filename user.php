<!doctype html>
<?php

session_start();
$email  = $_SESSION['email'];
$password = $_SESSION['pass'];
$vkey= $_SESSION['vkey'];

 $host = "localhost";
     
         require('connect.php');       
$db = new connect();
$conn = $db->get_conn();

                $sql = "select * from accounts where email = '$email' and pass = '$password' ";
                $result = mysqli_query ($conn,$sql);
                    
                if ($row = mysqli_fetch_array($result))
                    
                
                {
                }
else 
    
{
      header('Location:log.html');

}
        





?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      
      <link rel="stylesheet" href="style.css" >

    <title>bank management system</title>
  </head>
    <style>

    .report 
        
        {
            position: absolute;
            left: 25%;
            width: 50%;
            top: 20%;
            height: 60%;
            background-color: ;
            padding-top: 20px;
            text-align: center;
            
            font-size: 25px;
        }
    
    </style>
    <script>
        
        function change(y)
                         
                         {
                                 
                                         for (var x = 1; x<10 ; x++)
                                             {
                                                 
                                           
                                         if (y==x)
                                             
                                  {
                                      
                                  document.getElementById('m'+x).style.display='block' ; 
                                      
                                  }
                                                 
                                                 else 
                                                     {
                                                         
                                                     
                                    document.getElementById('m'+x).style.display='none' ;
                                     }
                         
                                             }
                         
                         } 
    </script>
  <body>
      
      <section id = "top">
      
      <div class = "center" id ="bank_txt">
   <b>  Psychometric test system  </b>
          <br> 
          <small> user <?php
   
?></small>
      </div>
      
      </section>
       <div class = "picture">
      <img src="proff.jpg" > 
      </div>
      <div class = "center" >
      <b> <?php
    echo date("F j, Y, g:i a");
?></b>
      </div>
      
            
    <div class="main_box" id = "m2">
    
       
      </div>
            
    
      
      <div class="main_box" id = "m1">  <div class = "report">  
        
            YOUR RESULTS FOR YOUR PEVIOUS EXAM <hr>
          
          
          <?php
          
          $vkey =  $_SESSION['vkey'];
          $sql = "select * from results where vkey = '$vkey'  ";
                $result = mysqli_query ($conn,$sql);
                    
                if ($row = mysqli_fetch_array($result))
                    
                
                {
                    echo '<br>  overal exam mark = '.$row['score'].'%';
                }
else 
    
{
      echo "<br> results not found !!!!!";

}
        

          
          
          ?>
          
          
          
        </div> </div>  

      <div class="main_box" id = "m3">
       <div class = "report">  
        WELCOME TO THE <br>
           PSYCHOMETRIC<br>
           TEST SYSTEM <br>
           BY<br>
           TAMSANGQA BESNON LUBASI 
            
        </div>
      </div>
      
      
      <!--       ----START----    -->
            
      <div class="main_box" id = "m4">
      
      </div>
      
      <!--       ----end-----    -->
      
      <!--       ----START----    -->
                       
      <div class="main_box" id = "m5">
      
      </div>
      <!--       ----end-----    -->
      
         <!--       ----START----    -->
      <div class="main_box" id = "m6">
      
      </div>
      
      
      <!--       ----end-----    -->
      
      
      <!--       ----START----    -->
      
      <div class="main_box" id = "m7">
      
          </div>
      
      
      
      <!--       ----end-----    -->
      
      
      <!--       ----START----    -->
      
      
      <div class="main_box" id = "m8">
          
      </div>
      
      <!--       ----end-----    -->
      
      
     
      <!--       ----START----    -->

      <div class="main_box" id = "m9">
       
      </div>
    
      <!--       ----end-----    -->
      
      
      
      <section id ="opt_box">
      <div id = "side_top">
          <img src="icon.png">
          
          </div>
          <div class = "btn" >
          
          <button  onclick = "change(1)" id = "button"> view your results </button>
          <button onclick = "change(3)"  id = "button"> welcome message </button>
              <form action="" method="post"> 
          <button  name = "logout" onclick = "change(9)" id = "button"> logout </button>
         </form> </div>
      
          <?php
          
          if(isset($_POST['logout']))
              
          {
             session_destroy();
             // unset();
              header('Location:log.html');
          }
          
          ?>
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>