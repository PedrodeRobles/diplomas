<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>

    <!-- Formulario -->
    <br>
<div class="row">
    <div class="col-5">

        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    Cursos
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text"
                            class="form-control" 
                            name="id" 
                            id="id" 
                            value="<?php echo $id; ?>"
                            aria-describedby="helpId" placeholder="ID">
                    </div>
                    <div class="mb-3">
                        <label for="nombre_curso" class="form-label">Nombre del curso</label>
                        <input type="text"
                            class="form-control" 
                            name="nombre_curso"     
                            id="nombre_curso" 
                            value="<?php echo $nombre_curso; ?>"
                            aria-describedby="helpId" placeholder="Nombre del curso">
                    </div>
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                        <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                        <button type="submit" name="accion" value="borrar" class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <!-- Tabla -->
    <div class="col-7">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($listaCursos as $curso){ ?>
                    <tr>
                        <td> <?php echo $curso['id']; ?>  </td>
                        <td> <?php echo $curso['nombre_curso']; ?> </td>
                        <td> 
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $curso['id']; ?>">
                                <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
</div>



<?php include('../templates/pie.php'); ?>