<?php
global $mysqli;
global $urlweb;
?>
<h3 class="center">Administrador de Categorías</h3>
<a class="btn waves-light right" href="?modulo=agregarcategoria&idcategoria=">Agregar Categoría</a>




<table class="white center">
    <thead>
    <tr>
        <th>Nombre de categoría</th>
        <th>Descripción</th>
        <th>URL de imagen</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>
  
    </tbody>
    <?php
        
    $strsql= "SELECT idcategoria, nombre_categoria, descripcion, url_imagen FROM categorias";
   if ($stmt = $mysqli->prepare($strsql)){
       $stmt->execute();
       $stmt->store_result();
       if($stmt->num_rows > 0){
            $stmt->bind_result($idcategoria, $nombre_categoria, $descripcion, $url_imagen);
            while ($stmt->fetch()){
            ?>
        <tr id="<?php echo $idcategoria?>">
        <td><?php echo $nombre_categoria?></td>
        <td><?php echo $descripcion?></td>
        <th><img src="<?php echo $url_imagen?>" width="100px"alt=""></th>
        <th><a class="btn green" href="?modulo=editarcategoria&idcategoria=<?php echo $idcategoria ?>">Editar</a></th>
        <th><a class="btn red" href="javascript:eliminar(<?php echo $idcategoria ?>)">Eliminar</a></th>
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

<script>
    function eliminar(idcategoria)
    {
        var url = '<?php echo $urlweb ?>servicios/ws_admin_productos.php?accion=eliminarc';
        fetch(url, {
            method: 'POST',
            body: JSON.stringify({
                "idcategoria": idcategoria
            })
        })
        .then((response)=> response.json())
        .then((data) => {
        console.log(data);
        const row = document.getElementById(idcategoria);
        row.remove();
        })
        .catch((error) => {
            console.error(error);
        })

    }
    </script>



