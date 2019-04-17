<?php session_start();
$vez = intval($_POST['vez']);
$vez = $vez+1;

if ($vez == 3)
{
    $vez = 1;
}
$_SESSION['vez']=$vez;

echo $vez;
