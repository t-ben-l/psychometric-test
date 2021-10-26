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
            height: 40%;
            background-color: white;
        }
        .box p
        {
            position: absolute;
            text-align: left;
            left: 2%;
            top: 5%;
            font-size: 20px;
            
        }
        .button
        {
            position: absolute;
            width: 90%;
            height: 10%;
            left: 5%;
            top: 87%;
            background-color: chartreuse;
            text-align: center;
            font-size: 24px;
            font-family: sans-serif;
            
        }
    </style>
    <body>
        <section class = "container"> 
        <section id  = "top">
       <strong>  Online psychometric test   </strong>
        </section>
           <section class = "box">
            <p> this test will last for 15 minutes </p>
             <?php 
            
            $vkey = $_GET['vkey'];
         require('connect.php');
$db = new connect();
$conn = $db->get_conn();
            echo "<a href = 'test.php?vkey=$vkey'> 
            <div class = 'button'> Start </div></a> ";
                 $sql = "update accounts set status = 1 where vkey = '$vkey' ";
                
                if ($conn->query($sql))
                    
                {}
            ?>
        
        </section>
            </section>
      <section id  = "footer">
        developed by - Tamsangqa BensonLubasi
        </section>
    </body>


</html>