<?php
session_start();
//Should be able to request and send job details//






 
 $host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'hire';

//$_SESSION['jobid']=0;

//echo $_GET[id];
$job_id = $_POST['id'];
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $stmt = $conn->query("SELECT job_description FROM Jobs WHERE id = {$job_id}");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($results as $row) {
            echo '<h1>' . $row['jobtitle'] . '</h1>';
            echo '<p>' ."Posted " . $row['dateposted'] . '</p>';
            echo '<p>' . $row['category'] . '</p>';
            echo '<h3>' . $row['companyname'] . '</h3>';
            echo '<h3>' . $row['companylocation'] . '</h3>';
            echo '<h2>' . "Job Description". '</h2>';
            echo '<p>' . $row['jobdescription'] . '</p>';
            echo '<p id = "job_id">' . $row['id'] . '</p>';
    }
}
?>