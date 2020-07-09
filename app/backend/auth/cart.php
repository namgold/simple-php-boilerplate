<?php
require_once 'app/backend/core/Init.php';

// var_dump($_POST);
if ($user && $user->isLoggedIn()) {

} else {
    echo json_encode(['error'=>true]);
}