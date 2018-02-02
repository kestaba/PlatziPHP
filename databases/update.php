<?php

include_once 'config.php';
$result = false;

if (!empty($_POST)){
    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];

    $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'id' => $id,
        'name' => $newName,
        'email' => $newEmail,
    ]);

    $nameValue = $newName;
    $emailValue = $newEmail;

}else{
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=:id";
    $query = $pdo->prepare($sql);

    $query->execute([
        'id' => $id
    ]);

    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $emailValue = $row['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databases with Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <h1>Update User</h1>
        <a href="list.php">Back</a>
        <?php
            if ($result){
                echo '<div class="alert alert-success"> Success </div>';
            }
        ?>
        <form action="update.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $nameValue?>">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $emailValue?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
