<?php
    $newUser = [
        'name' => $_POST['name'],
        'lastname' => $_POST['lastname'],
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];

    // store the information in database and redirect the user to login page
    header('location: login.php');
?>

