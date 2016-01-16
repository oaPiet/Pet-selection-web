<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)die($conn->connect_error);
$query="SELECT * FROM imagen ORDER BY RAND() LIMIT 1;";
$result=$conn->query($query);
if(!$result)die ("Database access failed: ".$conn->error);
$row=$result->fetch_array(MYSQLI_NUM);$regla="<img src=imex/$row[1]  class='responsive-img per1' onclick='votar()'>";
$num="<div id='num' style='display: none;'>$row[2]</div>";
$id="<div id='id' style='display: none;'>$row[0]</div>";
$pos="<div id='pos' style='display: none;'>$row[3]</div>";
$result->close();$conn->close();
echo <<<_END
    $regla
    $num
    $id
    $pos
_END;
?>
