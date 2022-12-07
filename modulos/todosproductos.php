<?php
    global $mysqli; 

    $strsql ="SELECT idproducto, nombre_producto, descripcion, precio, cantidad, url_imagen FROM productos";
   if ($stmt = $mysqli->prepare($strsql)){
       $stmt->execute();
       $stmt->store_result();
       if($stmt->num_rows > 0){
             $stmt->bind_result($idproducto, $nombre_producto, $descripcion, $precio, $cantidad, $url_imagen);
            while ($stmt->fetch()){
            ?>
            <div class="container #eceff1 blue-grey lighten-5">
            <div class="row">
            <div class="col l6 m6 s12 #eceff1 blue-grey lighten-5">
             <img class="materialboxed" width="400" src="<?php echo $url_imagen ?>" alt="" class="responsive-img">
             </div>
    
            <div class="col l6 m6 s12 #eceff1 blue lighten-5">
        <h4><?php echo $nombre_producto?></h4>
        Descripción del producto: <b><span><?php echo $descripcion ?></span></b>
        Cantidad en existencia: <b><span><?php echo $cantidad ?></span></b>
        <h5><b><span><?php echo "L ".number_format($precio, 2) ?></span></b></h5>
        <a class="red darken-3 btn" href="?modulo=carrito&idproducto=<?php echo $idproducto ?>"><i class="material-icons left"  name="addcarrito">add_shopping_cart</i>Agregar al carrito</a>
    </div>
    </div>
    </div>
    <?php
     }
    }
    else{
   echo "No hay registros";
        }
       }

   else{
    echo "No se pudo evaluar la consulta";
   }
   ?>

   






