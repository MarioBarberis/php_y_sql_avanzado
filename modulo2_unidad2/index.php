<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formulario.controlador.php";
require_once "modelos/formularios.modelos.php";

// Instaciamos objetos

$plantilla = new ControladorPlantilla();

//Ejecutamos metodo

$plantilla ->ctrGetPlantilla();