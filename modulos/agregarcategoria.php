<?php
global $mysqli;
global $urlweb;
?>
  <div class="container">
    <form class="col s12" method="post">
      <div class="row">

        <div class="input-field col l6 m6 s12">
          <input placeholder="Nombre de la categoría"  type="text" name="nombre_categoria" class="validate">
          <label>Nombre de la categoría</label>
        </div>

        <div class="input-field col l6 m6 s12">
          <input placeholder="Descripcion"  type="text" name="descripcion" class="validate">
          <label>Descripcion</label>
        </div>

        <div class="input-field col l12 m12 s12">
          <input placeholder="app\img\nombredeimagen.jpg"  type="text" name="url_imagen" class="validate">
          <label>URL de Imagen</label>
        </div>
        <button class="waves-effect waves-light btn" type="submit" name="agregar" id="submit">Guardar</button>
        <a class="btn blue" href="?modulo=admin_categorias&idcategoria=">Regresar</a>
       
        
        
        
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
      -6: Gamer
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

    if (strlen($_POST['nombre_categoria']) >= 1 &&
    strlen($_POST['descripcion']) >= 1 &&
    strlen($_POST['url_imagen']) >= 1)
    {
        $nombre_categoria= trim($_POST['nombre_categoria']);
        $descripcion= trim($_POST['descripcion']);
        $url_imagen= trim($_POST['url_imagen']);
        $strsql ="INSERT INTO categorias(nombre_categoria, descripcion, url_imagen) VALUES ('$nombre_categoria','$descripcion','$url_imagen')";
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


