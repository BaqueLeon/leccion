 <!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<?php
$id=$_GET["id"];
echo "valor de id es ". $id;
include_once("PerfilCollector.php");
include_once("Perfil.php");
$PerfilCollectorObj = new PerfilCollector();
$ObjPerfil = $PerfilCollectorObj->showPerfil($id);

print_r($ObjPerfil);

?>

<h2>Editar Objeto Perfil</h2>

 <form action="actualizar.php" method="post">
  <div class="form-group">
    <label for="email">Id:</label>
    <input type="text" name="idperfil" value="<?php echo $ObjPerfil->getIsPerfil(); ?>" readonlyne />
  </div>
  <div class="form-group">
    <label for="pwd">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $ObjPerfil->getNombre(); ?>" autofocus required />
  </div>

  <a href="index.php">Cancelar</a>
  <input type="submit" value="Guardar" />
</form> 

</body>
</html> 
