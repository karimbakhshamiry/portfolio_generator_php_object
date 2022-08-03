<?php
    include_once('core_functions.php');
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $country = $_POST['country'];
    $age = $_POST['age'];
    $languages = $_POST['languages'];

    if (gettype($languages) == 'array') {
        $languages = implode(', ', $languages);
    }

    $degree = $_POST['degree'];
    $skills = explode(',',$_POST['skills']);
    $interest = $_POST['interest'];
    
    $image = $_FILES['photo'];
    $image_tmp_name = $image['tmp_name'];
    if ($image['type'] == 'image/jpeg' || $image['type'] == 'image/png') {
        move_uploaded_file($image_tmp_name, "./storage/images/".$_POST['firstname'].".jpg");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Portfolio Summary</title>
</head>
<body>
    <!-- navigation goes here -->
    <nav class="nav">
        <div class="container nav__container">
            <a class="nav_link fa fa-home selected" href="index.php"></a>
            <a class="nav_link fa fa-gear" href="setting.php"></a>
            <a class="nav_link" href="logout.php">
                <svg class="logout" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 512 512"><path d="M160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64c17.67 0 32-14.33 32-32S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256c0 53.02 42.98 96 96 96h64c17.67 0 32-14.33 32-32S177.7 416 160 416zM502.6 233.4l-128-128c-12.51-12.51-32.76-12.49-45.25 0c-12.5 12.5-12.5 32.75 0 45.25L402.8 224H192C174.3 224 160 238.3 160 256s14.31 32 32 32h210.8l-73.38 73.38c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0l128-128C515.1 266.1 515.1 245.9 502.6 233.4z"/></svg>
            </a>
        </div>
    </nav>

    <main class="main"> 
        <div class="summary">
            <div class="introduction">
                <div class="container introduction__container">
                    <h1 class="title">Hi there, my name is <br><span class="blue"><?php echo ucwords($firstName. ' '. $lastName);?></span></h1>
                    <div class="img">
                        <img src="./storage/images/<?php echo $firstName?>.jpg" alt="user profile">
                        <a href="./delete_picture.php?picture=<?php echo $firstName?>.jpg">Delete my photo</a>
                    </div>
                </div>
            </div>

            <div class="personal_information">
                <div class="container personal_information__container">
                    <p>I am <?php echo $age?> from <?php echo ucwords($country)?> , and I can speak <span class="red bold"> <?php echo ucwords($languages)?></span>.</p>
                </div>
            </div>
            
            <div class="skills">
                <div class="container skills__container">
                    <p>I am <?php echo $degree?>, and  the skills I've got are the followings</p>
                    <ul>
                        <?php
                            foreach($skills as $skill) {
                                echo "<li class='red bold'>".ucfirst($skill)."</li>";
                            }
                            ?>
                    </ul>
                </div>
            </div>
        
            <div class="my_interest">
                <div class="container my_interest__container">
                    <p>Talking about my interests, <?php echo $interest;?></p>
                </div>
            </div>
        </div>
    </main> 
    <script src="./assets/js/index.js"></script>
</body>
</html>