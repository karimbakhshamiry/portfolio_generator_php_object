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
    }





?>