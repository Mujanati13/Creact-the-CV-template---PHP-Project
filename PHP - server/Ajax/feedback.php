<?php
session_start();
if (isset($_GET['msg']) && $_GET['email']) {
    $msg = $_GET['msg'];
    $em = $_GET['email'];
    $result = "message" . $msg . " email " . $em;
    $_SESSION['result'] = $result;
    $_SESSION['anwer'] = true;
    echo ($result);
}
