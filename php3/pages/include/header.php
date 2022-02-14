<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm  navbar-light">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand style">Logo</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=all-products" class="nav-link">All Product</a></li>
            <?php foreach ($catagories as $catagory)  {?>
                <li class="nav-item"><a href="action.php?pages=catagory&&catagory_id=<?php echo $catagory['id'] ?>" class="nav-link"><?php echo $catagory['name'] ?></a></li>
           <?php  } ?>
        </ul>
    </div>
</nav>





