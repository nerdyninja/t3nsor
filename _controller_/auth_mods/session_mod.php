<?php
session_start();
if(empty($_SESSION['T3_SESSION_ID']) || empty($_SESSION['T3_SESSION_FNAME']) || empty($_SESSION['T3_SESSION_LNAME']) || empty($_SESSION['T3_SESSION_EMAIL']) || empty($_SESSION['T3_SESSION_PASSWORD']) || $_SESSION['T3_SESSION_KEY']!= md5($_SERVER["HTTP_USER_AGENT"])){
    header("location: /login");
}
?>