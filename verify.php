<?php 

$vkey = $_GET['vkey'];

             require ('connect.php');
$db = new connect();
$conn = $db->get_conn();
$status = 1;
echo $vkey;
   $sql = "update accounts set status = 1 where vkey = '$vkey'  and status = 0 ";
                
                if ($conn->query($sql))
                    
                   { 
                    
                    echo '<br>success';
                }
else 
{
    echo '<br>no!!!!!!!!!!!!!!!1';
}
?>