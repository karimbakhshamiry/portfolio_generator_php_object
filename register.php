<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Sign up</title>
</head>
<body>
    <main class="main">
        <div class="container main__container">
            <div class="register_form_container">
                <form class="register_form" action="register_backend.php" method="POST" autocomplete="off">
                    <input type="text" name="name" id="name" placeholder="name" required>
                    <input type="text" name="lastname" id="lastname" placeholder="last name"  required>
                    <input type="email" name="username" id="username" placeholder="username (email)" required>
                    <input type="password" name="password" id="password" placeholder="password" required>
                    <button type="submit">Sign up</button>
                    <div>
                        <p>Already have an account? Login <a href="login.php">here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="./assets/js/index.js"></script>
</body>
</html>