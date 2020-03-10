<?php
require_once '../Models/User.php';
require_once '../Models/Database.php';
$errors = [];
$passwordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';