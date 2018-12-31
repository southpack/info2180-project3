<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql= "SELECT id,company_name,job_title,category,date_posted FROM Jobs;";
    $result= $conn->query($sql);
    
    $test= $result->fetchAll(PDO::FETCH_ASSOC);
    
     
     echo '<table class=table.';
     echo '<tr>';
     echo '<th>Company</th>';
     echo '<th>Job Title</th>';
     echo '<th>Category</th>';
     echo '<th>Date </th>';
     echo '<tr>'; 
     foreach($test as $row){
      
      echo '<tr>';
      echo '<td>'.$row['company_name'].'</td>';
      echo '<td>'.'<a href="jobdetails.html">'.$row['job_title'].'</a></td>';
      echo '<td>'.$row['category'].'</td>';
      echo '<td>'.$row['date_posted'].'</td>';
      echo '<tr>';
      
      
     
     }
     echo '</table>';
    
?>