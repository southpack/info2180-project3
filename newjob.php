
<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    $jobtitle = $_POST['jobtitle'];
    $jobdesc = $_POST['jobdescription'];
    $category = $_POST['category'];
    $company = $_POST['company'];
    $jobloca = $_POST['joblocation'];
    $try = date("Y-m-d");
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Jobs(job_title,job_description,category,company_name,company_location,date_posted) VALUES  ('$jobtitle', '$jobdesc', '$category', '$company', '$jobloca', '$try')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        header("location: dashboard.html");
    }
        catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    
    
    
?>
