<?php 
// INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio web con PHP');

/*Llamado a la conexión BD*/
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();
?>