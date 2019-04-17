<?php

$logindb  = 'root';

$senhadb  = 'gerens00';

$bancodb =  'felipetr_jogo';


$tema = $_POST['tema'];

$link_db = mysqli_connect('localhost',$logindb,$senhadb,$bancodb) or die("Erro " . mysqli_error($link_db));
mysqli_set_charset($link_db, "utf8");

$queryint = "SELECT * FROM mimica WHERE tipo = '$tema' ORDER BY RAND()" or die("Erro.." . mysqli_error($link_db));

$queryint = mysqli_query($link_db, $queryint);

while ($mimica = mysqli_fetch_array($queryint)) {
    echo $mimica['mimica'];
    exit();
}