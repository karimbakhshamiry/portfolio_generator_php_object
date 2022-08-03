<?php
    if ($_GET['picture']) {
        unlink('./storage/images/'.$_GET['picture']);
        header('location: index.php');
    }
?>