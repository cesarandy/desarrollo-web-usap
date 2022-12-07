<?php
global $mysqli;
global $urlweb;
?>

<?php

$idcategoria = $_GET['idcategoria'];
$strsql= "SELECT idcategoria, nombre_categoria, descripcion, url_imagen FROM categorias WHERE idcategoria=?";
if($stmt = $mysqli->prepare($strsql)){
$stmt->bind_param("i",$idcategoria);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows > 0) {
    $stmt->bind_result($idcategoria, $nombre_categoria, $descripcion, $url_imagen);
    $stmt->fetch();
}else{
    echo "No hay nada que mostrar";
}
}
else{
    echo "No se pudo preparar la consulta";
}
?>

    <form class="col s12 container" method="post">
      <div class="row">

      
        <div class="input-field col l8 m8 s8">
          <input placeholder="Nombre de la categoria"  type="text" name="nombre_categoria" class="validate" value="<?php echo $nombre_categoria; ?>">
          <label>Nombre de la categoria</label>
        </div>

        <div class="input-field col l4 m2 s4">
          <input placeholder="Descripcion"  type="text" name="descripcion" class="validate" value="<?php echo $descripcion; ?>">
          <label>Descripcion</label>
        </div>

        
        <div class="input-field col l6 m8 s12">
          <input placeholder="app\img\nombredeimagen.jpg"  type="text" name="url_imagen" class="validate" value="<?php echo $url_imagen ?>">
          <label>URL de Imagen</label>
        </div>

        <div class="col l12 m12 s12">
          <h6>Imagen de referencia:</h6>
      <img src="<?php echo $url_imagen?>" width="100px"alt="">
       </div>
    
        <a class="btn blue" href="?modulo=admin_categorias&idcategoria=">Regresar</a>
        <button class="waves-effect waves-light btn" type="submit" name="actualizar" id="submit">Actualizar datos</button>
        <div class="row">
    <div class="col l12 m12 s12">
      <h4>Informacion</h4>
    <h6>
      Formato de URL de Imagen:
      <br>
        app\img\nombredeimagen.jpg
    </h6>
    </div>
   
   

    
    </div>
  
        <?php
        if (isset($_POST['actualizar'])){

        if (strlen($_POST['nombre_categoria']) >= 1 &&
        strlen($_POST['descripcion']) >= 1 &&
        strlen($_POST['url_imagen']) >= 1)
        {
        $nombre_categoria= trim($_POST['nombre_categoria']);
        $descripcion= trim($_POST['descripcion']);
        $url_imagen= trim($_POST['url_imagen']);
        $strsql= "update categorias set nombre_categoria='$nombre_categoria', descripcion='$descripcion', url_imagen='$url_imagen' WHERE idcategoria='$idcategoria'";
        $resultado=mysqli_query($mysqli,$strsql);
        if ($resultado) {
        ?>
        <h3>Datos Actualizados</h3>
        <?php
         } else {
        ?>
        <h3>Error, los datos nos se Actualizaron</h3>
        <?php
        }
        }else {
        ?>
        <h3>Debe de llenar todos los campos</h3>
        <?php
        }
        }
        ?>


        
       

     
