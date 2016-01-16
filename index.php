<?php
require_once 'login.php';
require_once 'buscar.php';
include_once ('rankeo.php');
echo <<<_END
<nav>
<div class="nav-wrapper red darken-2" style="margin-top: -1.5em;">
<a class="brand-logo" style="margin-left:.2em;">
  <span id='logo'>FACEMASH</span>
  </a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li>
      <a class='dropdown-button' data-activates='dropdown1' data-hover="true">GRUPOS</a>
      <ul id='dropdown1' class='dropdown-content'>
        <li><a href="/">GRUPO 1</a></li>
        <li class="divider"></li> <li><a href="/">GRUPO 2</a></li>
        <li class="divider"></li> <li><a href="/">GRUPO 3</a></li>
      </ul>
    </li>
    <li><a href="upload.php"><span style="font-size: 1em;">SUBIR FOTO</span></a></li>
  </ul>
<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="side-nav" id="mobile-demo">
      <li class="no-padding"><a class="collapsible-header waves-effect waves-teal" href="upload.php">SUBIR FOTO</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="bold">
            <a class="collapsible-header  waves-effect waves-teal">GRUPOS</a>
            <div class="collapsible-body">
                <ul>
                 <li><a href="index.php">GRUPO 1</a></li>
                  <li><a href="index.php">GRUPO 2</a></li>
                  <li><a href="index.php">GRUPO 3</a></li>
                </ul>
            </div>
          </li>
        </ul>
      </li>
  </ul>
</div>
</nav>
<div id="enc">
  <h4 class="center-align"> A quien eliges<br>EL poder es tuyo! </h4>
</div>
<div class="container">
  <div class="row ejecuta">
    <div class="col l5 m4 s12">
      <div class="persona" id='u1'> $regla $num $id $pos </div>
    </div>
    <div class="col l2 m2 s12">
        <h4 class="center-align" id="or"> VS </h4>
    </div>
    <div class="col l5 m4 s12">
      <div class="persona" id='u2'> $regla2 $num2 $id2 $pos2 </div>
    </div>
  </div>
</div>
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Instrucciones</h4>
    <p> Para votar puedes hacer click sobre las imagenes. <br>Mira el top en la parte inferior derecha.<br>Para poder ver el ranking actualizado refresca la pagina <br><strong>Recomendacion : Si tienes problemas con la funcionalidad , borra la memoria cache del navegador</strong> </p></div><div class="modal-footer"> <a class=" modal-action modal-close waves-effect waves-red btn-flat">Adelante!</a>
  </div>
</div>
<footer class="page-footer red darken-3" style="margin-top: 5.7em;">
  <div class="footer-copyright red darken-3">
    <div class="container red darken-3"> © 2015 FM-2015 ALL RIGHT RESERVED </div>
  </div>
</footer>
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script><script async src="js/otros.js"></script><script async src="js/evento.js"></script>
</body>
</html>
_END;

?>
