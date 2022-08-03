<?php
    session_start();
    class User {

        public function isLoggedIn() {
            if (isset($_SESSION['authenticated'])) {
                return true;
            }
        }

        public function authenticate($username, $password) {
            if ($username == 'admin@gmail.com' && $password == 'password') {
                $_SESSION['authenticated'] = true;
                return true;
            }
        }
        
        public function handleNotLoggedIn() {
            if (!$this->isLoggedIn()) {
                header('location: login.php');
            }
        }
        
        function addPost($image, $description) {
            $image_name = $image['name'];
            $image_tmp_name = $image['tmp_name'];
            move_uploaded_file($image_tmp_name, './storage/post/'.$image_name);
            // some logic that stores the data in database, havent learned it yet,
            // so this part of code is left. and directly redirected to index.php
            header('location: index.php');
        }

        public function changeProfilePicture($image) {
            $image_tmp_name = $image['tmp_name'];
            if ($image['type'] == 'image/jpeg' || $image['type'] == 'image/png') {
                move_uploaded_file($image_tmp_name, './storage/profile/'. $_SESSION['user'].'.jpg');
                header('location: profile.php');
                return;
            }
    
            return 'image type must be jpg or png';
    
        }
        
        public function changeCoverPhoto($image) {
            $image_tmp_name = $image['tmp_name'];
            if ($image['type'] == 'image/jpeg' || $image['type'] == 'image/png') {
                move_uploaded_file($image_tmp_name, './storage/cover/'. $_SESSION['user'].'.jpg');
                header('location: profile.php');
                return;
            }
    
            return 'image type must be jpg';
    
        }
    }





?>