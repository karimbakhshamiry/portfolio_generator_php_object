<?php
    include_once('core_functions.php');
    handleNotLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Portfolio Generator</title>
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
        <div class="container main__container">
            <h1 class="title">Fill up your information below</h1>
            <form class="summary_form" action="generate_summary.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <label for="firstname"> First Name: 
                    <input type="text" name="firstname" id="firstname" required>
                </label>

                <label for="lastname"> Last Name: 
                    <input type="text" name="lastname" id="lastname" required>
                </label>
                
                <label for="country">Country: 
                    <input type="text" name="country" id="country" required>
                </label>

                <label for="age"> Age: 
                    <input type="number" name="age" id="age" min="10" max="100" required>
                </label>
                
                <label for="languages"><span>Which languages can you speak? <br> <span class="small">press 'ctrl' key to select multiple languages</span></span>
                    <select name="languages[]" id="languages" multiple="multiple" size="10" required>
                        <option value="dari">Dari</option>
                        <option value="pashto">Pashto</option>
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                        <option value="dutch">Dutch</option>
                        <option value="japanese">Japanese</option>
                        <option value="chinese">Chinese</option>
                        <option value="turkish">Turkish</option>
                        <option value="russian">Russian</option>
                    </select>
                </label>

                <label for="degree">Education Degree: 
                    <select name="degree" id="degree" required>
                        <option value="--">--choose--</option>
                        <option value="grade 3">Grade 3</option>
                        <option value="grade 4">Grade 4</option>
                        <option value="grade 5">Grade 5</option>
                        <option value="grade 6">Grade 6</option>
                        <option value="grade 7">Grade 7</option>
                        <option value="grade 9">Grade 9</option>
                        <option value="grade 10">Grade 10</option>
                        <option value="grade 11">Grade 11</option>
                        <option value="grade 12">Grade 12</option>
                        <option value="graduated">Graduated</option>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="doctorate">Doctorate</option>
                        <option value="post doctorate">Post Doctorate</option>
                    </select>
                </label>

                <label for="skills"><span>Write three of your top skills. <br><span class="small">Write your key skills comma separated</span></span>
                    <input type="text" name="skills" id="skills" required>
                </label>

                <label for="interest">
                    <textarea name="interest" id="interst" cols="30" rows="10" placeholder="write shortly about your interests, hobbies, likes and dislikes." required></textarea>
                </label>

                <label for="photo">Upload your photo here
                    <input type="file" name="photo" id="photo" required>
                </label>
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
    <script src="./assets/js/index.js"></script>
</body>
</html>

<?php
    echo gettype('hey')
?>