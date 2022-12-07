<?php
class funciones
{
    var $mysqli;
    function _construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    function openmodule($idmodulo)
    {
            if (file_exists("modulos/$idmodulo.php")){
                require "modulos/$idmodulo.php";
            }
            else{
                echo "No existe el modulo seleccionado";
            }
    }
}
?>