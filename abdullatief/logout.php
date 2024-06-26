<?php
// NIM :2257401075
// NAMA:Abdul 
// Kelas:MI22A
session_start();
if(session_destroy()) {
    header("Location: login.php");
}
?>