<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php");
    exit();
} else {
    header("Location: profile.php");
    exit();
}
?>
