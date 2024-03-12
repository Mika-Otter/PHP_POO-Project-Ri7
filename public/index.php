<?php 
include "../core/MainApp.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network - Ri7</title>
    <link rel="stylesheet" href="style.css">
    <?php if (isset($_POST['register'])): ?>
        <link rel="stylesheet" href="subscribe.css">
    <?php endif; ?>
</head>
<body>
    
    <?php
    if (isset($_POST['register'])||isset($_POST['subscribe'])) {
        include "../views/subscribe.php";
    } elseif (isset($_POST['backHome'])) {
        include "../views/home.php";
    } else {
        include "../views/home.php";
    }
    ?>
</body>
</html>