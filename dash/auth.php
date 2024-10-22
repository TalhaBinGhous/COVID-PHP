<?php

if(!session_id()){
    session_start();
}

if(!isset($_SESSION['D_Name'])){
    header("location: login.php");
}
?>