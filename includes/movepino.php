<?php session_start();

$_SESSION['pos'.$_POST['id']] = $_POST['casa'];

echo $_POST['id'];