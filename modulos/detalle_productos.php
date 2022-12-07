<?php
global $mysqli;
$idproducto = $_GET['idproducto'];
$strsql ="SELECT idproducto, nombre_producto, descripcion, precio, cantidad, url_imagen FROM productos where idproducto=?";
if($stmt = $mysqli->prepare($strsql)){
$stmt->bind_param("i",$idproducto);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows > 0) {
    $stmt->bind_result($idproducto, $nombre_producto, $descripcion, $precio, $cantidad, $url_imagen);
    $stmt->fetch();
}else{
    echo "No hay nada que mostrar";
}
}
else{
    echo "No se pudo preparar la consulta";
}
?>

<div class="row">
    <div class="col l6 m6 s12">
        <img class="materialboxed" width="400" src="<?php echo $url_imagen ?>" alt="" class="responsive-img">
    </div>
    
    <div class="col l6 m6 s12">
        <h4><?php echo $nombre_producto?></h4>
        Descripción del producto: <b><span><?php echo $descripcion ?></span></b>
        Cantidad en existencia: <b><span><?php echo $cantidad ?></span></b>
        <h5><b><span><?php echo "L ".number_format($precio, 2) ?></span></b></h5>
        <a class="red darken-3 btn" href="?modulo=carrito&idproducto=<?php echo $idproducto ?>"><i class="material-icons left"  name="addcarrito">add_shopping_cart</i>Agregar al carrito</a>
       
       
      
    </div>

</div>





    
