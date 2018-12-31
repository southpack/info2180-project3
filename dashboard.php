<?php
    
    session_start();
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    
    $try= $_SESSION['email'];
    echo $try;
    
    $a= "SELECT id FROM Users WHERE email= '$try'; ";
    $b= $conn->query($a);
    $c= $b->fetchAll(PDO::FETCH_ASSOC);
    foreach($c as $row){
     $id= $row['id'];
    }

    $sql= "SELECT company_name,job_title,category,date_applied FROM Jobs INNER JOIN Jobs_applied_for ON  Jobs.id= Jobs_applied_for.job_id WHERE Jobs_applied_for.user_id= $id;";
    $result= $conn->query($sql);
    
    $test= $result->fetchAll(PDO::FETCH_ASSOC);
     
     
     echo '<table id="table">';
     echo '<tr>';
     echo '<th>Company</th>';
     echo '<th>Job Title</th>';
     echo '<th>Category</th>';
     echo '<th>Date Applied</th>';
     echo '<tr>'; 
     foreach($test as $row){
      echo '<tr>';
      echo '<td>'.$row['company_name'].'</td>';
      echo '<td>'.'<a href="jobdetails.html">'.$row['job_title'].'</a></td>';
      echo '<td>'.$row['category'].'</td>';
      echo '<td>'.$row['date_applied'].'</td>';
      echo '</tr>';
      
      
      }
     echo '</table>';
    
?>