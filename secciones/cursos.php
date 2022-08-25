<?php 
// INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio web con PHP');

/*Llamado a la conexión BD*/
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia();

/*Recibir datos y validar que no sean nulos*/ 
$id           = isset($_POST['id'])?$_POST['id']:''; //Si recibimos el 'id' lo guardamos, sino ''
$nombre_curso = isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion       = isset($_POST['accion'])?$_POST['accion']:'';

print_r($_POST);

/*Acciones para agregar/editar/borrar datos */
if ($accion !='') {

    switch($accion) {
        case 'agregar':
            $sql = "INSERT INTO cursos (id, nombre_curso) VALUES (NULL, :nombre_curso)";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso', $nombre_curso);
            $consulta->execute();
            // $conexionBD->ejecutarConsulta($sql);
        break;

        case 'editar':
            $sql = "UPDATE cursos SET nombre_curso='$nombre_curso' WHERE id=$id";
            echo $sql;
        break;

        case 'borrar':
            $sql = "DELETE FROM cursos WHERE id=$id";
            echo $sql;
        break;

        case 'Seleccionar':
            $sql = "SELECT * FROM cursos WHERE id=:id";
            $consulta = $conexionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $curso = $consulta->fetch(PDO::FETCH_ASSOC); //Obtener información
            print_r($curso);
            $nombre_curso = $curso['nombre_curso'];
        break;
    }
}


/*Obtener info de la base de datos de cursos*/
$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos = $consulta->fetchAll(); //Retorna todos los datos y lo almacena en una variable

?>