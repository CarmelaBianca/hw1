<?php
    header('Content-Type: application/json');
    $password= $_GET["q"];
    $ok=preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,50}$/', $password);
        echo json_encode(array('ok' => $ok > 0 ? true : false));
?>