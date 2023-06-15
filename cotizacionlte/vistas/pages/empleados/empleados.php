<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Empleados</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Empleados</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Seccion de Empleados</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <section class="contenido">
                  <div class="boton">
                      <h1>Empleados...</h1>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          Añadir Nuevo
                      </button>
                  </div>
                  <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre Empleados</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Email</th>
                      <th scope="col">Fecha Ingreso</th>
                      <th scope="col">Cargo</th>
                      <th scope="col" class="row col-12" >Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                          foreach($all as $key => $value){
                      ?>
                      <tr>
                        <td><?= $value['id_empleado'] ?></td>
                        <td><?= $value['nombre'] ?></td>
                        <td><?= $value['edad'] ?></td>
                        <td><?= $value['telefono'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['fechaIngreso'] ?></td>
                        <td><?= $value['cargo'] ?></td>
                        <td class="row gap-2 col-12">
                          <a class="btn btn-danger" href="../backend/acciones/empleados/borrarEmpleado.php?id=<?= $value['id_empleado'] ?>&req=delete">BORRAR</a>
                          <a class="btn btn-primary" href="../backend/acciones/empleados/editarEmpleado.php?id=<?=$value['id_empleado']?>">Editar</a>
                        </td>
                      </tr>
                      <?php  } ?>
                          
                  </tbody>
                  </table>
                </section>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Nuestros Empleados...
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Empleado...</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: rgb(231, 253, 246);">
                <form class="col d-flex flex-wrap" action="../backend/acciones/empleados/registrarEmpleado.php" method="post">
                  <div class="mb-1 col-12">
                    <label class="form-label">Nombre del empleado: </label>
                    <input type="text" placeholder="Ingrese el nombre del empleado" class="form-control" name="nombre"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label class="form-label">Edad del empleado: </label>
                    <input type="number" placeholder="Ingrese la edad del empleado" class="form-control" name="edad"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Telefono del empleado: </label>
                    <input type="number" placeholder="Ingrese la edad del empleado" class="form-control" name="telefono"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Email del empleado: </label>
                    <input type="email" placeholder="Ingrese el email del empleado" class="form-control" name="email"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Fecha de Ingreso del empleado: </label>
                    <input type="date" class="form-control" name="fechaIngreso"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Cargo del empleado: </label>
                    <input type="text" placeholder="Ingrese el cargo del empleado" class="form-control" name="cargo"> 
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div>


    </section>
    <!-- /.content -->
  </div>
