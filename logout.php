<?php

session_start(); 

if (isset($_SESSION['nom'])) {
    session_destroy();
    header('location:./');
}else {
    header('location:./');
}

?>