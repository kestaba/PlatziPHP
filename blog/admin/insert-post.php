<?php

include_once '../config.php';

$result = false;
if (!empty($_POST)){
    $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);
}

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
                <h2>New Post</h2>
                <p>
                    <a class="btn btn-default" href="posts.php">Back</a>
                </p>

                <?php
                    if($result){
                        echo '<div class="alert alert-success">Post Saved!</div>';
                    }
                ?>                
                <form action="insert-post.php" method="post">
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input class="form-control" type="text" name="title" id="inputTitle">
                    </div>
                    <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Save">
                </form>
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