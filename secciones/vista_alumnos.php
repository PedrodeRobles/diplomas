<?php include('../templates/cabecera.php'); ?>

<div class="row">
    <div class="col-5">

        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    Alumnos
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text"
                            class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text"
                            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Escriba el nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text"
                            class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="Escriba los apellidos">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Cursos del alumno:</label>
                        <select multiple class="form-control" name="cursos[]" id="listaCursos">
                            <option>Seleciona una opción</option>
                            <option>Curso 1</option>
                            <option>Curso 2</option>
                        </select>
                    </div>

                    <div class="btn-group" role="group" aria-label="">
                        <button type="button" class="btn btn-success">Agregar</button>
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>

                </div>
            </div>


        </form>

    </div>
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
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>

<?php include('../templates/pie.php'); ?>