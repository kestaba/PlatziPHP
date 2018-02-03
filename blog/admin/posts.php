<?php

include_once '../config.php';

$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();
$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog with Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Title</h1>
            </div>
        </div>
        <div class="row">            
            <div class="col-md-8">
            <h2>Posts</h2>
            
            <a class="btn btn-primary" href="insert-post.php">New Post</a>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                    foreach($blogPosts as $blogPost){
                        echo '<tr>';
                        echo '<td>'. $blogPost['title'] .'</td>';
                        echo '<td>'. 'Edit' .'</td>';
                        echo '<td>'. 'delete' .'</td>';
                        echo '</tr>';
                    }
                ?>
            </table>            
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo rerum accusantium, doloribus officiis laborum est a ducimus esse modi repellat placeat dolorum molestias cumque temporibus excepturi iure neque! Quos, est?Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolor quod aperiam minima quidem dolore maiores. Assumenda, totam unde! Autem hic, perspiciatis odio sit exercitationem aliquid facilis laborum quod iure.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    This is a footer <br>
                    <a href="admin/index.php">Admin Panel</a>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>