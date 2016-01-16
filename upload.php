
<?php
require_once 'login.php';
require_once('rankeo.php');
echo <<<_END
<nav>
  <div class="nav-wrapper red darken-2" style="margin-top: -1.5em;">
    <a href="/" class="brand-logo" style="margin-left:.2em;"/>
      <span id='logo1'>FACEMASH</span>
    </a>
  </div>
</nav>

<form method='post' action='upload.php' enctype='multipart/form-data'>
<div class="file-field input-field">
      <div class="btn">
        <span>Select a JPG, GIF, PNG or TIF File:</span>
        <input type="file" name='filename' size='110000'>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
</div>
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
</button>
</form>
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
_END;

if ($_FILES)
{
$name = $_FILES['filename']['name'];
switch($_FILES['filename']['type'])
{
case 'image/jpeg': $ext = 'jpg'; break;
case 'image/gif': $ext = 'gif'; break;
case 'image/png': $ext = 'png'; break;
case 'image/tiff': $ext = 'tif'; break;
default:
 $ext = '';
 break;
}
if ($ext && ($_FILES['filename']['size']<= 110000))
{
$carpeta = "imex";
move_uploaded_file($_FILES['filename']['tmp_name'], "$carpeta/$name");
echo "<img src='$carpeta/$name'>";
$conn=new mysqli($hn,$un,$pw,$db);
$query="INSERT INTO imagen VALUES ('','$name',0,0)";
$result=$conn->query($query);
if(!$result)die ("Database access failed: ".$conn->error);
header("location:index.php");
}
else echo "'$name' is not an accepted image file";
}
echo "</body></html>";
?>
