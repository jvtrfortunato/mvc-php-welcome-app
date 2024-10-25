<?php
require_once 'models/User.php';

class WelcomeController {
    public function showForm() {
        require_once 'views/welcome.php';
    }

    public function submitName() {
        $name = $_POST['name'];
        $user = new User();
        $welcomeMessage = $user->welcome($name);
        require 'views/welcome.php';
    }
}