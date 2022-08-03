<?php
    include_once('core_functions.php');
    if (isLoggedIn()) {
        header('index.php');
    }

    // fake data that we pretend came from database
    const user = [
        'username' => 'admin@gmail.com',
        'password' => 'password',
        'name' => 'rami',
        'lastname' => 'malik'
    ];

    if (isset($_POST['username']) && isset($_POST['password'])){
        if ($_POST['username'] == user['username'] && $_POST['password'] == user['password']) {
            $_SESSION['authenticated'] = true;
            $_SESSION['user'] = user['name'];
            header('location: index.php');
        } else {
            $message = 'wrong username or password';
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <main class="main">
        <div class="container main__container">
            <div class="login_form_container">
                <form class="login_form" action="" method="POST" autocomplete="off">
                    <input type="email" name="username" id="username" placeholder="username" required>
                    <input type="password" name="password" id="password" placeholder="password" required>
                    <button type="submit">Login</button>
                    <div>
                        <p style="color:red"><?php echo $message?></p>
                        <a href="forgot_password.php">Forgot your password?</a>
                        <p>Don't have an account? Sign up <a href="register.php">here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="./assets/js/index.js"></script>
</body>
</html>