<?php
global $mysqli;
?>

<ul id="dropdown1" class="dropdown-content">
    <li><a class="blue-text" href="?modulo=categorias&idcategoria=1">Computadoras</a></li>
    <li><a class="blue-text" href="?modulo=categorias&idcategoria=2">Celulares</a></li>
    <li><a class="blue-text" href="?modulo=categorias&idcategoria=3">Tablets</a></li>
    <li><a class="blue-text" href="?modulo=categorias&idcategoria=4">Perifericos</a></li>
    <li><a class="blue-text" href="?modulo=categorias&idcategoria=5">Smarthome</a></li>
    <li><a class="blue-text" href="?modulo=categorias&idcategoria=9">Gamer</a></li>
  </ul>
  <nav >

    <div class="nav-wrapper #b71c1c blue darken-4" >
      <div class="">
   <h5 class="left show-on-small">Skynet Store  </h5>
      <ul class="right show-on-small">
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Categorías<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="?modulo=todosproductos"><i class="material-icons left">card_giftcard</i>Productos</a></li>
      </ul>
    </div>
    </div>
  </nav>     
  </ul>
  </div>
    
 

  <div class="slider" >
    <ul class="slides">
      <li style="position:absolute; z-index:0;">
        <img  src="app/img/Mensaje.jpg" class="">
        <div class="caption center-align" >
          <h3>Deja que la tecnología invada tu vida</h3>
          <h5 class="light grey-text text-lighten-3">encuentra lo que necesitas aquí.</h5>
        </div>
      </li>
      <li style="position:absolute; z-index:0;">
      <img src="app/img/asuslaptopgamer.jpeg" class="responsive-img" >
        <div class="caption left-align">
         
          
        </div>
      </li>

      <li style="position:absolute; z-index:0;">
      <img src="app/img/Mensaje2.jpg" class="responsive-img" >
        <div class="caption left-align">
          <h3>Actualizate</h3>
          <h5 class="light grey-text text-lighten-3">No tengas miedo a las actualizaciones, encuentra lo mas nuevo aquí.</h5>
        </div>
      </li>

      <li style="position:absolute; z-index:0;">
      <img src="app/img/perifericosmsi.jpg" class="responsive-img" >
        <div class="caption left-align">
        <h3>Siempre lomejor </h3>
          <h5 class="light grey-text text-lighten-3">En perifericos gamer</h5>
        </div>
      </li>
    
      <li style="position:absolute; z-index:0;">
      <img src="app/img/Mensaje3.jpg" class="responsive-img" >
        <div class="caption left-align">
          <h3>Todo lo que necesitas </h3>
          <h5 class="light grey-text text-lighten-3">Toda la tecnología al alcance de tu mano.</h5>
        </div>
      </li>
    

      <li style="position:absolute; z-index:0;">
      <img src="app/img/Mensaje4.jpg" class="responsive-img" >
        <div class="caption center-align">
          <h3>Skynet Store!</h3>
          <h5 class="light grey-text text-lighten-3">Siempre los primeros en técnología.</h5>
        </div>
      </li>
    </ul>
  </div>
  
  <div class="container " >
  <div class="row">


  
    
  <div class= "col l12">
  <div class="card-panel #eceff1 blue-grey lighten-5 center"><h4><span class="blue-text text-darken-2">Laptops</span></h4></div>
    <div class="row center #eceff1 blue-grey lighten-5" >
      <?php 
      $strsql = "SELECT `idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `url_imagen` FROM `productos` where idcategoria=1 LIMIT 8";
      if($stmt = $mysqli->prepare($strsql)){
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0){
          $stmt->bind_result($idproducto, $nombre_producto, $idcategoria, $descripcion, $precio, $url_imagen);
          while($stmt->fetch()){
            ?>
            <a href="?modulo=detalle_productos&idproducto=<?php echo $idproducto ?>">

        <div class="col l3 s6 m3">
        <div>
          <br>
        <img src="<?php echo $url_imagen ?>" class="responsive-img" alt="Imagen no found" >
        </div>
        <div>
        <h6 class="blue-text"><?php echo $nombre_producto?></h6>
        </div>
        <div>
        <h6 class="blue-text"><?php echo "L ".number_format($precio,2)?></h6>
        </div>
      </div>
            <?php
          }
        }
        else{
          echo "No hay datos para mostrar";
        }
      }
      else{
        echo "No se pudo preparar la consulta";
      }
      ?>
  </div>
  </div>


 
  <div class= "col l12">
  <div class="card-panel #eceff1 blue-grey lighten-5 center"><h4><span class="blue-text text-darken-2">Celulares</span></h4></div>
    <div class="row center #eceff1 blue-grey lighten-5" >
      <?php 
      $strsql = "SELECT `idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `url_imagen` FROM `productos` where idcategoria=2 LIMIT 8";
      if($stmt = $mysqli->prepare($strsql)){
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0){
          $stmt->bind_result($idproducto, $nombre_producto, $idcategoria, $descripcion, $precio, $url_imagen);
          while($stmt->fetch()){
            ?>
            <a href="?modulo=detalle_productos&idproducto=<?php echo $idproducto ?>">

        <div class="col l3 s6 m3">
        <div>
          <br>
        <img src="<?php echo $url_imagen ?>" class="responsive-img" alt="Imagen no found" >
        </div>
        <div>
        <h6 class="blue-text"><?php echo $nombre_producto?></h6>
        </div>
        <div>
        <h6 class="blue-text"><?php echo "L ".number_format($precio,2)?></h6>
        </div>
      </div>
            <?php
          }
        }
        else{
          echo "No hay datos para mostrar";
        }
      }
      else{
        echo "No se pudo preparar la consulta";
      }
      ?>
  </div>
  </div>





  </div>
  </div>

  <div class= "col l12">
  <div class="card-panel #eceff1 blue center"><h4><span class="white-text text-darken-2">Zona Gamer</span></h4></div>
    <div class="row center #eceff1 blue-grey lighten-5" >
      <?php 
      $strsql = "SELECT `idproducto`, `nombre_producto`, `idcategoria`, `descripcion`, `precio`, `url_imagen` FROM `productos` where idcategoria=9 LIMIT 8";
      if($stmt = $mysqli->prepare($strsql)){
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0){
          $stmt->bind_result($idproducto, $nombre_producto, $idcategoria, $descripcion, $precio, $url_imagen);
          while($stmt->fetch()){
            ?>
            <a href="?modulo=detalle_productos&idproducto=<?php echo $idproducto ?>">

        <div class="col l3 s6 m3">
        <div>
          <br>
        <img src="<?php echo $url_imagen ?>" class="responsive-img" alt="Imagen no found" >
        </div>
        <div>
        <h6 class="blue-text"><?php echo $nombre_producto?></h6>
        </div>
        <div>
        <h6 class="blue-text"><?php echo "L ".number_format($precio,2)?></h6>
        </div>
      </div>
            <?php
          }
        }
        else{
          echo "No hay datos para mostrar";
        }
      }
      else{
        echo "No se pudo preparar la consulta";
      }
      ?>
  </div>
  </div>
<div class="container">
  <div class= "col l12">
  <div class="card-panel #eceff1 blue-grey lighten-5 center"><h4><span class="blue-text text-darken-2">Categorías</span></h4></div>
    <div class="row center #eceff1 blue-grey lighten-5" >
      <?php 
      $strsql = "SELECT idcategoria, nombre_categoria, url_imagen FROM categorias";
      if($stmt = $mysqli->prepare($strsql)){
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0){
          $stmt->bind_result($idcategoria, $nombre_categoria,$url_imagen);
          while($stmt->fetch()){
            ?>
              <a href="?modulo=categorias&idcategoria=<?php echo $idcategoria?>">

        <div class="col l6 s6 m6">
        <div>
          <br>
        <img src="<?php echo $url_imagen ?>" class="responsive-img" alt="Imagen no found" >
        </div>
        <div>
        <h6 class="blue-text"><?php echo $nombre_categoria?></h6>
        </div>
      </div>
            <?php
          }
        }
        else{
          echo "No hay datos para mostrar";
        }
      }
      else{
        echo "No se pudo preparar la consulta";
      }
      ?>
  </div>
  </div>
  </div>
  
      
  


 



