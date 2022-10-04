<?php

session_start();
if(isset($_SESSION['des']) && isset($_SESSION['prix']) && isset($_SESSION['cart'])) {
    unset($_SESSION['des']);
    unset($_SESSION['prix']);
    unset($_SESSION['cart']);
    
}
session_destroy();
header("location:index.php");
?>

