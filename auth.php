<?php

if(!session_id()){
    session_start();
}

if(!isset($_SESSION['P_name'])){
    header("location: login.php");
}
?>