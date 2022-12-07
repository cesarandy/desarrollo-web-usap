
<?php
global $mysqli;
$idcategoria = $_GET['idcategoria'];
$strsql ="SELECT idproducto, idcategoria, nombre_producto, descripcion, precio, cantidad, url_imagen FROM productos WHERE idcategoria=?";
if($stmt = $mysqli->prepare($strsql)){
$stmt->bind_param("i",$idcategoria);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows > 0) {
    $stmt->bind_result($idproducto, $idcategoria, $nombre_producto, $descripcion, $precio, $cantidad, $url_imagen);

    while($stmt->fetch()){
        ?>
       
       <div class="container #eceff1 blue-grey lighten-5 " >
        <div class="row" >
       
          <div class="col l6 m6 s6 valign-wrapper #eceff1 blue-grey lighten-5 ">
            <br>
         <img src="<?php echo $url_imagen ?>" class="responsive-img" alt="Imagen no found">
         </div>  

         <div class="col l6 m6 s6 #eceff1 blue lighten-5">
         <h4 class="blue-text center "><?php echo $nombre_producto?></h4>
         <h4 class="blue-text center"><?php echo "L ".number_format($precio,2)?></h4>
         <a class="red darken-3 btn" href="?modulo=carrito&idproducto=<?php echo $idproducto ?>"><i class="material-icons left"  name="addcarrito">add_shopping_cart</i>Agregar al carrito</a>
         </div>

         </div>
         </div>

        <?php
      }

}else{
    echo "No hay nada que mostrar";
}
}
else{
    echo "No se pudo preparar la consulta";
}
?>

