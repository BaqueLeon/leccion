<?
	session_start();
?>
<!DOCTYPE html>
<html>
<body>
<p>Formulario</p>
<?PHP


if (isset($_SESSION['Mi session'])){
 echo "<p> Perfil: (" .$_SESSION['Mi session']  . " " .") [<a href='salir.php'>Salir</a>]";


include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();


foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdPerfil() . "  -- " . $c->getNombre() . "  -- " . $c->getTipo() . "  -- " . $c->getNacimiento() . "  -- " . $c->getImg();   
  echo " " . "<a href='formularioDemoEditar.php?id=" . $c -> getIdPerfil() . "'>Editar</a>";    
  echo " " . "<a href='eliminar.php?id=" . $c -> getIdPerfil() . "'>Eliminar</a>";
                                
  echo " " . "</div>"; 
}

echo "<br /> " . "<a href='formularioDemoInsert.php?id=" . "'>Nuevo</a> ";


}
else{
?>


<form action="login.php" method="post">
Nombre:<br>
<input type="text" name="nombre">
<br>
Tipo:<br>
<input type="text" name="tipo">
<br>
Fecha de Nacimiento:<br>
<input type="text" name="nacimiento">
<br><br>
<input type="submit" value="eliminar">
<input type="reset">
</form> 
<?php }?>



</body>
</html>
