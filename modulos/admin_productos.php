<?php
global $mysqli;
global $urlweb;
?>



<div class="container">
<h3 class="center">Administrador de Productos</h3>
<a class="btn waves-light right" href="?modulo=agregarproducto&idproducto=">Agregar productos</a>
<div class="row center">
<div class="col s12">
<table class="white center">
    <thead>
    <tr>
        <th>Productos</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th>Imagen</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
  
    </tbody>
    <?php
        
    $strsql= "SELECT productos.idproducto, productos.nombre_producto, categorias.nombre_categoria, productos.descripcion, productos.url_imagen, productos.precio, productos.cantidad FROM `productos` INNER JOIN categorias ON categorias.idcategoria=productos.idcategoria";
   if ($stmt = $mysqli->prepare($strsql)){
       $stmt->execute();
       $stmt->store_result();
       if($stmt->num_rows > 0){
            $stmt->bind_result($idproducto, $nombre_producto, $categoria, $descripcion, $url_imagen, $precio, $cantidad);
            while ($stmt->fetch()){
            ?>
        <tr id="<?php echo $idproducto?>">
        <td><?php echo $nombre_producto?></td>
        <td><?php echo $categoria?></td>
        <td><?php echo $descripcion?></td>
        <th><img src="<?php echo $url_imagen?>" width="100px" class="responsive-img"alt=""></th>
        <th><?php echo $precio?></th>
        <th><?php echo $cantidad?></th>
        <th><a class="btn green" href="?modulo=editar&idproducto=<?php echo $idproducto ?>">Editar</a></th>
        <th><a class="btn red" href="javascript:eliminar(<?php echo $idproducto ?>)">Eliminar</a></th>
        </tr>
        
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

   
</table>
</div>
</div>
</div>
<script>
    function eliminar(idproducto)
    {
        var url = '<?php echo $urlweb ?>servicios/ws_admin_productos.php?accion=eliminar';
        fetch(url, {
            method: 'POST',
            body: JSON.stringify({
                "idproducto": idproducto
            })
        })
        .then((response)=> response.json())
        .then((data) => {
        console.log(data);
        const row = document.getElementById(idproducto);
        row.remove();
        })
        .catch((error) => {
            console.error(error);
        })

    }
    </script>



