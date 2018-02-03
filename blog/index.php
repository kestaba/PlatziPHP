<?php

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
                <?php
                    foreach($blogPosts as $blogPost){
                        echo '<div class="blog-post">';
                        echo '<h2>'. $blogPost['title'] .'</h2>';
                        echo '<p>Jan 1, 2020 by <a href="">Alex</a></p>';
                        echo '<div class="blog-post-image">';
                        echo '<img src="images/keyboard.jpg" alt="" style="max-width:100%">';
                        echo '</div>';
                        echo '<div class="blog-post-content">';
                        echo $blogPost['content'];
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
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