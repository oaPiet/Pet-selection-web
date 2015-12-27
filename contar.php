<?php
require_once 'login.php';
require_once 'buscar.php';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)die($conn->connect_error);
    $idganador=$_GET['idganador'];
    $idperdedor=$_GET['idperdedor'];
    $pganador=$_GET['pganador'];
    $perdedor=$_GET['pperdedor'];
    $query="UPDATE imagen SET vote = vote + 1 WHERE id=$idganador";
    $result=$conn->query($query);
if(!$result)die ("Database access failed: ".$conn->error);
    $query="UPDATE imagen SET posicion = $pganador WHERE id=$idganador";
    $result=$conn->query($query);
if(!$result)die ("Database access failed: ".$conn->error);
    $query="UPDATE imagen SET posicion = $pperdedor WHERE id=$idperdedor";
    $result=$conn->query($query);
if(!$result)die ("Database access failed: ".$conn->error);