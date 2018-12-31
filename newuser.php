<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $pword = $_POST['password'];
    $tel = $_POST['telephone'];
    $ema = $_POST['email'];
    $date = $_POST['date_joined'];
    
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Users (first_name,last_name, password, telephone, email, date_joined ) VALUES  ('$fname', '$lname', '$pword', '$tel', '$ema', '$date')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record Updated";
        header("location: dashboard.html");
    }
        catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    
    
    
?>

