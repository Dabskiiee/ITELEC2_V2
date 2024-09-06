<?php
 include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Twinkle+Star&display=swap" rel="stylesheet">

</head>

<body>

<img id="moon"src="src/css/img/moondra.png" alt="mn">
<img class="stars"src="src/css/img/stars.png" alt="mn">
<img class="stars1"src="src/css/img/stars.png" alt="mn">


<header><h1>Hello there!</h1></header>

<div class="main_container">
    <div class="containers">
        <h1>SIGN IN</h1>
        <div class="forms">
            <form class= "form" action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="email" name="email" placeholder="Enter email" required> <br>
                <input type="password" name="password" placeholder="Enter password" required> <br>
                <button type="submit" name="btn-signin">SIGN IN</button>
            </form>
        </div>
    </div>

    <div class="containers" >
        <h1>REGISTRATION</h1>
        <div class="forms">
            <form class= "form" action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="text" name="username" placeholder="Enter username" required> <br>
                <input type="email" name="email" placeholder="Enter email" required> <br>
                <input type="password" name="password" placeholder="Enter password" required> <br>
                <button type="submit" name="btn-signup">SIGN UP </button>
            </form>
        </div>
    </div>
</div>

</body>

</html>