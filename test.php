<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    
    $sql= "SELECT job_description FROM Jobs WHERE job_title= 'Database'";
    $result= $conn->query($sql);
    
    $test= $result->fetchAll(PDO::FETCH_ASSOC);
    
     
     foreach($test as $row){
      
      echo '<tr>';
      echo '<p>'.$row['job_description'].'</p>';
      

     
     }
     header("location: jobdetails.html");
     
    
?>
