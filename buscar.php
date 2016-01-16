<?php require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)die($conn->connect_error);
$query="SELECT * FROM imagen ORDER BY RAND() LIMIT 1;";
$result=$conn->query($query);
if(!$result)die ("Database access failed: ".$conn->error);
$row=$result->fetch_array(MYSQLI_NUM);
$regla="<img src=imex/$row[1] class='responsive-img per1' onclick='votar()'>";
$num="<div id='num' style='display: none;'>$row[2]</div>";
$id="<div id='id' style='display: none;'>$row[0]</div>";
$pos="<div id='pos' style='display: none;'>$row[3]</div>";
$cont="<div id='cont' style='display: none;'>$row[4]</div>";
for($k=0;$k<100;++$k){
  $query="SELECT * FROM imagen ORDER BY RAND() LIMIT 1;";
  $result=$conn->query($query);
  if(!$result)die ("Database access failed: ".$conn->error);
  $row=$result->fetch_array(MYSQLI_NUM);
  $reglax="<img src=imex/$row[1] class='responsive-img per1' onclick='votar()'>";
  if($regla!=$reglax){
    $regla2="<img src=imex/$row[1] class='responsive-img per2' onclick='votar2()'>";
    $num2="<div id='num2' style='display: none;'>$row[2]</div>";
    $id2="<div id='id2' style='display: none;'>$row[0]</div>";
    $pos2="<div id='pos2' style='display: none;'>$row[3]</div>";
    $cont2="<div id='cont2' style='display: none;'>$row[4]</div>";
  }
}
$result->close();
$conn->close();
  ?>
