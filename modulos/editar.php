<?php
global $mysqli;
global $urlweb;
?>

<?php

$idproducto = $_GET['idproducto'];
$strsql= "SELECT productos.idproducto, productos.nombre_producto, productos.idcategoria, productos.descripcion, productos.url_imagen, productos.precio, productos.cantidad FROM `productos` WHERE productos.idproducto=?";
if($stmt = $mysqli->prepare($strsql)){
$stmt->bind_param("i",$idproducto);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows > 0) {
    $stmt->bind_result($idproducto, $nombre_producto, $idcategoria, $descripcion, $url_imagen, $precio, $cantidad);
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
          <input placeholder="Nombre del producto"  type="text" name="nombre_producto" class="validate" value="<?php echo $nombre_producto; ?>">
          <label>Nombre del producto</label>
        </div>

        <div class="input-field col l4 m2 s4">
          <input placeholder="Id categoria"  type="text" name="idcategoria" class="validate" value="<?php echo $idcategoria; ?>">
          <label>Id categoria</label>
        </div>

        <div class="input-field col l12 m12 s12">
          <input placeholder="Descripción"  type="text" name="descripcion" class="validate" value="<?php echo $descripcion ?>">
          <label>Descripcion</label>
        </div>

        <div class="input-field col l4 m2 s6">
          <input placeholder="Precio"  type="text" name="precio" class="validate" value="<?php echo $precio ?>">
          <label>Precio</label>
        </div>

        <div class="input-field col l2 m2 s6">
          <input placeholder="Cantidad"  type="text" name="cantidad" class="validate" value="<?php echo $cantidad ?>">
          <label>Cantidad</label>
        </div>

        <div class="input-field col l6 m8 s12">
          <input placeholder="app\img\nombredeimagen.jpg"  type="text" name="url_imagen" class="validate" value="<?php echo $url_imagen ?>">
          <label>URL de Imagen</label>
        </div>

        <div class="col l12 m12 s12">
          <h6>Imagen de referencia:</h6>
      <img src="<?php echo $url_imagen?>" width="100px"alt="">
       </div>
    
        <a class="btn blue" href="?modulo=admin_productos&idproducto=">Regresar</a>
        <button class="waves-effect waves-light btn" type="submit" name="actualizar" id="submit">Actualizar datos</button>
        <div class="row">
    <div class="col l6 m6 s6">
      <h4>Informacion</h4>
    <h6>
      Categorias actuales:
      <br>
      -1: Computadoras
      <br>
      -2: Celulares
      <br>
      -3: Tablets
      <br>
      -4: Perifericos
      <br>
      -5: Smarthome
      <br>
      -9: Gamer
    </h6>
    <h6>
      Formato de URL de Imagen:
      <br>
        app\img\nombredeimagen.jpg
    </h6>
    </div>
   
   

    
    </div>
  
        <?php
        if (isset($_POST['actualizar'])){

        if (strlen($_POST['nombre_producto']) >= 1 &&
        strlen($_POST['idcategoria']) >= 1 && 
        strlen($_POST['descripcion']) >= 1 &&
        strlen($_POST['precio']) >=1 &&
        strlen($_POST['cantidad']) >= 1 && 
        strlen($_POST['url_imagen']) >= 1)
        {
        $nombre_producto= trim($_POST['nombre_producto']);
        $idcategoria= trim($_POST['idcategoria']);
        $descripcion= trim($_POST['descripcion']);
        $precio= trim($_POST['precio']);
        $cantidad= trim($_POST['cantidad']);
        $url_imagen= trim($_POST['url_imagen']);
        $strsql= "update productos set nombre_producto='$nombre_producto', idcategoria='$idcategoria', descripcion='$descripcion', precio='$precio', cantidad='$cantidad', url_imagen='$url_imagen' WHERE idproducto='$idproducto'";
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


        
       

     
