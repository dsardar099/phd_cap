<?php
    session_start();

    

    include('../external_links.php');
    include('../db_file/db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user signup || phd capital</title>
    <link rel="stylesheet" href="assets/signin.css">
    <style>
        
        
    </style>
    
</head>
<body>
    <h1>hello Admin</h1>
    <?php
        echo $_SESSION['admin_name'];
        echo $_SESSION['admin_db_id'];

    ?>
</body>
</html>