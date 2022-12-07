<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skynet.COM</title>
    <link rel="stylesheet" href="<?php echo $urlweb?>app/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="white" >

            


        <nav >
        <div class="nav-wrapper #eceff1 blue-grey lighten-5 " class="col 12">
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">apps</i>
            </a>
           <ul class="left hide-on-med-and-down">
            <a href=""></a>
            <li><a class="blue-text text-darken-2" href="?modulo=inicio">Inicio</a></li>
          </ul>
          <ul class="right">
          <li><a href="?modulo=administrador"><i class="material-icons" >account_box</i></a></li>  
           <li> <a href="?modulo=carrito"><i class="material-icons">shopping_cart</i></a></li>  
          
          
          </ul>
        </div>  
    </nav>
    <ul class="sidenav" id="mobile-nav" class="#eceff1 blue-grey lighten-5">
      <li><a href="?modulo=inicio">Inicio</a></li>
      <li><a href="?modulo=todosproductos">Productos</a></li>
          
    </ul>
  
  

<div class=""> 
<?php $funciones->openmodule($modulo); ?>
</div>
  





    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"> </script>

    <script>
         document.addEventListener('DOMContentLoaded', function() {
         var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
      indicators:true,
      fullWidth: true,
      height:600,
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems,);
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems,);
  });
  </script>
</body>


<footer class="page-footer #b71c1c blue darken-4">
  <div class="footer-copyright">
   
    © 2022 Skynet store
    <a class="grey-text text-lighten-4 right" href="#!">Rise of the machines</a>
    
  </div>


</footer>
</html>



