<?php  require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error)die($conn->connect_error);
    $query="SELECT * FROM imagen WHERE posicion > 0 ORDER BY posicion DESC;";
    $result=$conn->query($query);
    if(!$result)die ("Database access failed: ".$conn->error);
echo <<<_END
<!DOCTYPE html><html lang="es"> <head> <title>Facemash</title> <meta charset="utf-8"> <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1"><link rel="stylesheet" href="css/materialize.css"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> </head> <body>
_END;

for($j=0;$j<6;++$j){
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    echo <<<_END
      <li><a class="btn-floating btn-large" style="background:transparent"><img src=imex/$row[1] class='responsive-img per1'></a></li>
_END;
}
echo <<<_END
   </ul> </div>
_END;
$result->close();
$conn->close();
?>