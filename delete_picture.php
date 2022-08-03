<?php
    if (!$_SESSION['authenticated']) {
        header('location: login.php');
    } else {
        if ($_GET['picture']) {
            unlink('./storage/images/'.$_GET['picture']);
            header('location: index.php');
        }
    }
?>