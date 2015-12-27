<?php
require_once 'login.php';
require_once 'buscar.php';
include_once ('rankeo.php');
echo <<<_END
<nav> <div class="nav-wrapper red darken-2"><a href="#" class="brand-logo" style="margin-left:.2em;">Facemash</a> </div></nav> <div id="enc"> <h4 class="center-align"> A quien eliges<br>EL poder es tuyo! </h4> </div><div class="container"> <div class="row ejecuta"> <div class="col l5 m4 s12"> <div class="persona" id='u1'> $regla $num $id $pos </div></div><div class="col l2 m2 s12"> <h4 class="center-align" id="or"> VS </h4> </div><div class="col l5 m4 s12"> <div class="persona" id='u2'> $regla2 $num2 $id2 $pos2 </div></div></div></div><div id="modal1" class="modal"> <div class="modal-content"> <h4>Instrucciones</h4> <p> Para votar puedes hacer click sobre las imagenes. <br>Mira el top en la parte inferior derecha.<br>Para poder ver el ranking actualizado refresca la pagina <br><strong>Recomendacion : Si tienes problemas con la funcionalidad , borra la memoria cache del navegador</strong> </p></div><div class="modal-footer"> <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Adelante!</a> </div></div><footer class="page-footer red darken-3" style="margin-top:7.5em"> <div class="footer-copyright red darken-3"> <div class="container red darken-3"> © 2015 FM-2015 ALL RIGHT RESERVED </div></div></footer> </body> <script async src="js/jquery.js"></script> <script async src="js/materialize.js"></script><script async src="js/otros.js"></script><script async src="js/evento.js"></script> </html>
_END;
?>
