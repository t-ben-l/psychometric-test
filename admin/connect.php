<?php


class connect
    
{
    
    function construct ()
        
    {
        
        
    }
    
    function get_conn ()
        
    {$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="questions"; 
            
return $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
  
        
        
    }
    
    
}



?>