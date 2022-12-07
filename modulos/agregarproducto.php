<?php
global $mysqli;
global $urlweb;
?>
  <div class="container">
    <form class="col s12" method="post">
      <div class="row">

        <div class="input-field col l4 m4 s6">
          <input placeholder="Nombre del producto"  type="text" name="nombre_producto" class="validate">
          <label>Nombre del producto</label>
        </div>

        <div class="input-field col l2 m2 s6">
          <input placeholder="Id categoria"  type="text" name="idcategoria" class="validate">
          <label>Id categoria</label>
        </div>

        <div class="input-field col l6 m6 s12">
          <input placeholder="Descripción"  type="text" name="descripcion" class="validate">
          <label>Descripcion</label>
        </div>

        <div class="input-field col l2 m2 s6">
          <input placeholder="Precio"  type="text" name="precio" class="validate">
          <label>Precio</label>
        </div>

        <div class="input-field col l2 m2 s6">
          <input placeholder="Cantidad"  type="text" name="cantidad" class="validate">
          <label>Cantidad</label>
        </div>

        <div class="input-field col l8 m4 s12">
          <input placeholder="app\img\nombredeimagen.jpg"  type="text" name="url_imagen" class="validate">
          <label>URL de Imagen</label>
        </div>
        <button class="waves-effect waves-light btn" type="submit" name="agregar" id="submit">Guardar</button>
        <a class="btn blue" href="?modulo=admin_productos&idproducto=">Regresar</a>
       
        
        
        
    </form>
    <div class="row">
    <div class="col l6 m6 s6">
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
    </div>

    <div class="col l6 m6 s6">
    <h6>
      Formato de URL de Imagen:
      <br>
        app\img\nombredeimagen.jpg
    </h6>
    </div>

    </div>
  </div>
  
  <?php
if (isset($_POST['agregar'])){

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
        $strsql ="INSERT INTO productos(nombre_producto, idcategoria, descripcion, precio, cantidad, url_imagen) VALUES ('$nombre_producto','$idcategoria','$descripcion','$precio','$cantidad','$url_imagen')";
        $resultado=mysqli_query($mysqli,$strsql);
        if ($resultado) {
          ?>
            <h3>Datos guardados</h3>
          <?php
        } else {
            ?>
            <h3>Error, los datos nos se guardaron</h3>
            <?php
        }
    }else {
        ?>
        <h3>Debe de llenar todos los campos</h3>
        <?php
    }
    }
    ?>


