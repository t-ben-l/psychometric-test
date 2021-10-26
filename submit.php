<?php

$rad1 = $_POST['rad1'];
$rad2 = $_POST['rad2'];
$rad3 = $_POST['rad3'];
$rad4 = $_POST['rad4'];
$rad5 = $_POST['rad5'];

$vkey = $_GET['vkey'];

         require('connect.php');
$db = new connect();
$conn = $db->get_conn();
$quer = "select * from sample_questions ";
                $result = mysqli_query ($conn, $quer);
               
 $mark = 0; 
    while ($row = mysqli_fetch_array ($result))
                {$id = $row['question_number'];
                    if ($id  == 1)
                    {
                        if ($rad1 == $row['answer'])
                            $mark++;
                        
                    }
                    
                    if ($id  == 2)
                    {
                        if ($rad2 == $row['answer'])
                            $mark++;
                        
                    }
                    
                    if ($id  == 3)
                    {
                        if ($rad3 == $row['answer'])
                            $mark++;
                        
                    }
                    
                    
                    if ($id  == 4)
                    {
                        if ($rad4 == $row['answer'])
                            $mark++;
                        
                    }
                    
                    if ($id  == 5)
                    {
                        if ($rad5 == $row['answer'])
                            $mark++;
                        
                    }
                    
                    
                }


if ($mark==1)
{
    $mark = 20;
    
}if ($mark==2)
{
    $mark = 40;
    
}
if ($mark==3)
{
    $mark = 60;
    
}
if ($mark==4)
{
    $mark = 80;
    
}
if ($mark==5)
{
    
    $mark = 100;
    
}


$sql = "insert into results (vkey,one,two,three,four,five,score) values ('$vkey','$rad1','$rad2','$rad3','$rad4','$rad5','$mark')";
                
                if ($conn->query($sql))
                    
                   { }

header ('Location:examfinished.php');
?>