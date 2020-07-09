<?php
require_once 'app/backend/core/Init.php';
$cart = new Cart();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['uid'] && $user && $user->isLoggedIn()) {
        $result = $cart->create(array(
            "user_id" => $user->data()->uid,
        "product_id" => $_POST['uid'],
    ));
    if ($result) {
        echo json_encode(['data'=>true]);
        return;
    }
}
echo json_encode(['error'=>true]);
}