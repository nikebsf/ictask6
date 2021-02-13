<?php

session_start();

if($_SESSION["login"] == true){
    echo "Welcome to your Account";
}
?>