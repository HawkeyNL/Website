<?php
session_start();

if (isset($_GET['msg-error'])) {
    $messageID = $_GET['msg-error'];
} else {
    $messageID = 0;
}

switch ($messageID) {
    case 1:
        $message = "Voer A.U.B. alle gegevens in.";
        $messageColor = "error";
        break;
    case 2:
        $message = "Geen gebruiker gevonden met deze gegevens.";
        $messageColor = "error";
        break;
    case 3:
        $message = "U bent succesvol ingelogd!";
        $messageColor = "succesfull";
        break;
    default:
        $message = '';
        $messageColor = '';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LESS (CSS) -->
    <link rel="stylesheet/less" type="text/css" href="../less/main.less" />

    <link rel="icon" type="image/png" href="../img/logo_green.png">

    <?php require_once('../php/require/meta-tags.php') ?>

    <title>HawkeyNL - Front & Back End Developer.</title>
</head>
<body>
<!-- Navigation -->
<?php require_once('../php/require/login-navbar.php') ?>

<header>
    <div class="col-50 login">
        <h1>Login</h1>
        <p>Developer Panel Login (Not accessible for visitors)</p>
        <form action="./php/LoginController.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="Login">
            <?php
            if($message != '') {
                echo "<h2 class='" . $messageColor . "'>" . $message . "</h2>";
            }
            ?>
        </form>
    </div>
    <div class="clear"></div>
</header>

<script src="../js/nav.js"></script>
</body>
</html>