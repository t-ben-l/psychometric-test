<!DOCTYPE>


<html>

    <head>
    <title> Start page</title>
    </head>

    <style>
        body{
                background-color: dodgerblue;
        }
        .container
        {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0%;
            top: 0%;
        }
        #top
        {
            position: absolute;
            width: 100%;
            top: 0%;
            left: 0%;
            height: 5%;
            text-align: center;
            font-size: 100%;
            padding-top: 1%;
            font-family: sans-serif;
            background-color: darkgreen;
            color: white;
            
        }
            #footer
        {
            position: absolute;
            width: 100%;
            top: 98%;
            left: 0%;
            height: 3%;
            text-align: center;
            font-size: 100%;
            padding-top: 0.5%;
            font-family: sans-serif;
            background-color: darkgreen;
            color: white;
            font-size: 15px;
            
        }
        .box
        {
            position: absolute;
            width: 50%;
            left: 25%;
            top: 10%;
            height: auto;
            background-color: white;
            display: none;
        }
        #box1
        {
            display: block;
        }
        .box p
        {
            position: relative;
            text-align: left;
            left: 2%;
            top: 5%;
            font-size: 20px;
            
        }
        .button
        {
            position: relative;
            width: 90%;
            height: 10%;
            left: 5%;
           
            background-color: chartreuse;
            text-align: center;
            font-size: 24px;
            font-family: sans-serif;
            
        }
        
        
        
        /* starting test page css */
        
        #quest 
        {
            position: relative;
            height: 10%;
            width: 100%;
            left: 0%;
           
            background-color: darkcyan;
            text-align: center;
            color: white;
            
        }
        
        #answers 
        {
            position: relative;
            width: 90%;
            height: 40%;
            left: 5%;
           
            background-color: ;
        }
        
        .rad
        {
            width: 20px;
            left: 0%;
            border-radius: 1px solid green;
        }
        
        
        
 @media only screen and (max-width: 750px)
        {
            
             .box
        {
            position: absolute;
            width: 98%;
            left: 1%;
            top: 5%;
            height: auto;
            background-color: white;
            display: none;
        }
            
            
            
        }
    </style>
    <body>
        <section class = "container"> 
        <section id  = "top">
       <strong>  Online psychometric test   </strong>
        </section>
       
         
            <!-- code below must be in a php code to spawn -->   
            
            
            <?php
      
         require('connect.php');

$db = new connect();
$conn = $db->get_conn();
            $sql = " select * from sample_questions  ";
    $result = mysqli_query ($conn,$sql);
            $counter = 1;
            
        echo '
            <form action ="submit.php?vkey=1004a6c44a6c4013fbf18d4560811b6e" method = "post">
            '; 
    while ($row = mysqli_fetch_array ($result))
           {
     $track = $counter;
        echo ' 
            
            <section class = "box" id = "box'.$counter.'">
            <div id = "quest" > <strong> Question '.$counter++.'</strong></div>
            <div id = "header"> <stron>  Parent question </strong> <br></div>
            '.$row['parent_question']. ' <hr>
            
            
            <div id = "header"> <strong> Actual question </strong> <br></div>
            '.$row['question']. ' 
            <div id = "answers"> 
                <hr/>
            <input class = "rad" type="radio" name ="rad'.$track.'" value ="A" > A <br>
            <input  class = "rad" type="radio" name ="rad'.$track.'" value ="B" > B <br>
            <input  class = "rad" type="radio" name ="rad'.$track.'" value ="C" > YOU CANNOT SAY <br>
                
            </div>
            ';
        
        if ($counter != 6)
        {
            
            echo '
         
           
            <input type = "button" name ="not"  onclick="next('.$counter.')" class = "button" placeholde= "Next" >';
            
        }
        
        else
        {
           echo '
               
            <button style = "display:none" id = "finish" name = "submit"  class = "button"> Finish </button>
           
            '; 
        }
        echo '
        </section>
            
            ';
               
    }
            
        echo '
            </form>
            ';     
     echo '        
             <script>
        
        function next(y)
                         
         {
                                 
        for (var x = 1; x<'.$counter.' ; x++)
        {
         if (y==x )
                                             
         {  
             document.getElementById("box"+x).style.display="block" ;      
                                  }
                                                 
            else 
            document.getElementById("box"+x).style.display="none" ;
            
            if (y==5)
            {
            
             document.getElementById("finish").style.display="block" ; 
            }
                                     }
                               }
                     
    </script> 
             ';
        
        ?>
            <!-- end of looping php -->
            
            
         <!--   </section>
      <section id  = "footer">
        developed by - Tamsangqa BensonLubasi
        </section> -->
            
    </body>


</html>