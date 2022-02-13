<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">ETSY</a>
            <ul class="navbar-nav">
                <li><a href="action.php?pages=home" class="nav-link text-white">Home</a></li>
                <li><a href="action.php?pages=series" class="nav-link text-white">Series</a></li>
                <li><a href="action.php?pages=register" class="nav-link text-white">Registration</a></li>
                <li><a href="action.php?pages=all-data" class="nav-link text-white">All Data</a></li>
                <li class="dropdown">
                    <a href="action.php?pages=register" class="nav-link text-success fa fa-user text-white dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['name'] ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?pages=logout" class="dropdown-item">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
<?php } ?>