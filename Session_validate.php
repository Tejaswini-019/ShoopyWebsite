<?php
session_start();
if (!isset($_SESSION['sid'])) {
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');
    session_regenerate_id(true);
    $_SESSION['sid'] = '';
    $_SESSION['semail'] = '';
    header("Location: index.php");
    die("Redirecting to: index.php");
} else {
    $id = $_SESSION['sid'];
    $email = $_SESSION['semail'];
}
?>
