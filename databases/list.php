<?php
    require_once 'config.php';

    $queryResult = $pdo->query("SELECT * FROM users");
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
        <h1>List Users</h1>
        <a href="index.php">Home</a>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>

            <?php
                while($row = $queryResult->fetch()){
                    echo '<tr>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>