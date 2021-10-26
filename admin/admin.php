<!doctype html>
<?php

session_start();
$email  = $_SESSION['email'];
$password = $_SESSION['pass'];

require ('connect.php');
$db = new connect();
$conn = $db->get_conn();
                $sql = "select * from admin where email = '$email' and pass = '$password' ";
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
            left: 20%;
            width: 50%;
            top: 20%;
            height: 60%;
            background-color: ;
            padding-top: 20px;
            text-align: center;
          
            font-size: 25px;
        }
        #oneb
        {
              overflow-y: scroll;
            
            width: 60%;
            
            font-size: 20px;
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
          <small> admin <?php
   
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
            
    
      
      <div class="main_box" id = "m1">  <div  id  = "oneb" class = "report">  
        
            RESULTS FOR ALL REGISTERED USERS <hr>
          
       
          <table class="table table-dark" style = "position: absolute; left:  5%;" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">surname</th>
      <th scope="col">email</th>
      <th scope="col">  mark </th>
    </tr>
  </thead>
  <tbody>
      <?php 
      

require ('connect.php');
      
$db = new connect();
$conn = $db->get_conn();
      
      $sql = " select * from accounts ";
    $result = mysqli_query ($conn,$sql);
      $t = 1;
    while ($row = mysqli_fetch_array ($result))
           {
        $vkey = $row['vkey'];
           $sql2 = " select score from results where vkey = '$vkey' ";
    $result2 = mysqli_query ($conn,$sql2);
    $row2 = mysqli_fetch_array ($result2);
     
        
               echo '   
      
       <tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['name'].'</td>
      <td>'.$row['surname'].'</td>
      <td> '.$row['email'].'</td>
      <td> '.$row2['score'].'</td>
      
      <td>  <form action = "res.php?name='.$row['name'].'&surname='.$row['surname'].'&email='.$row['email'].'&score= '.$row2['score'].'" method = "post" > <input type="submit" name = "submm"> </form> </td>
      
      ';
      
        echo '
      
      
    </tr>
      
      ';
        
      
           }
      
      ?>
   
  </tbody>
</table>
          
          
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
          
          <button  onclick = "change(1)" id = "button"> view all results </button>
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