<?php include_once("./scripts/login.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <title>Login</title>
</head>
<body>
    <div class = "container">
        <div class = "boxContainer">
            <h1>Login</h1>
            <form action="" method="post">
                <div class = "boxContainer">
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <input id="login-button" type="submit" value="Login">
                    <a href = "./register.php">
                        <input id="register-button" type="button" value="Register">
                    </a>
                    <p><?php if (isset($_SESSION["error"])) {echo $_SESSION["error"]; unset($_SESSION["error"]);}?></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>