<?php

require_once 'config.php';
$result = false;

if (!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password,
    ]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <h1>Add User</h1>
        <a href="index.php">Home</a>
        <?php
            if ($result){
                echo '<div class="alert alert-success"> Success </div>';
            }
        ?>
        
        <form action="add.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>
</html>
