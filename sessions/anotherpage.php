<?php 
session_start();
unset($_SESSION['name']);
echo $_SESSION['age'];

 ?>