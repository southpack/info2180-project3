<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
    $collect = $_POST['email'];
    $emails = $conn->query("SELECT email FROM Users WHERE email LIKE '%$collect';");
    $results = $emails->fetch(PDO::FETCH_ASSOC);
    $try= $results['email'] ;
    $passwords = $conn->query("SELECT password FROM Users WHERE email LIKE '%$collect';");
    $result = $passwords->fetch(PDO::FETCH_ASSOC);
    $pass= $result['password'] ;
    
    
    if (!empty($_POST['email'])  && !empty($_POST['password'])) {
				
        if ($_POST['email'] === $try && $_POST['password'] == $pass) {
            $_SESSION['valid'] = true;
            $_SESSION['username'] = $_POST['email'];
            $_SESSION['email']= $_POST['email'];
            echo 'logged in';
            header("dashboard.html");
        }else {
            echo $msg = 'invalid username and password combination';
            header("location: index.html");
        }
    }
    
?>