<?php 
    //Errores
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    require_once('backend/config/clientes.php');
    $data = new Cofig();
    $all = $data-> obtainAll();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
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
                      <h1>Clientes...</h1>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          Añadir Nuevo
                      </button>
                  </div>
                  <table class="table table-custom">
                  <thead class="text-center">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre Cliente</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Direccion</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Tipo de Cliente</th>
                      <th scope="col" class="row col-12">Opciones</th>
                    </tr>
                  </thead>
                  <tbody class="col text-center">
                      <?php 
                          foreach($all as $key => $value){
                      ?>
                      <tr>
                        <td><?= $value['id_cliente'] ?></td>
                        <td><?= $value['nombreCliente'] ?></td>
                        <td><?= $value['telefonoCliente'] ?></td>
                        <td><?= $value['direccion'] ?></td>
                        <td><?= $value['correoCliente'] ?></td>
                        <td><?= $value['tipoCliente'] ?></td>
                        <td class="row gap-2 col-12">
                          <a class="btn btn-danger" href="../backend/acciones/clientes/borrarCliente.php?id=<?= $value['id_cliente'] ?>&req=delete">BORRAR</a>
                          <a class="btn btn-primary" href="../backend/acciones/clientes/editarClientes.php?id=<?=$value['id_cliente']?>">Editar</a>
                        </td>
                      </tr>
                      <?php  } ?>
                          
                  </tbody>
                  </table>
                </section>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Nuestros Clientes...
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Cliente...</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: rgb(231, 253, 246);">
                <form class="col d-flex flex-wrap" action="../backend/acciones/clientes/registrarCliente.php" method="post">
                  <div class="mb-1 col-12">
                    <label class="form-label">Nombre del cliente: </label>
                    <input type="text" placeholder="Ingrese el nombre del cliente" class="form-control" name="nombreCliente"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Telefono del cliente: </label>
                    <input type="number" placeholder="Ingrese el telefono del cliente" class="form-control" name="telefonoCliente"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Direccion del cliente: </label>
                    <input type="text" placeholder="Ingrese la direccion del cliente" class="form-control" name="direccion"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Correo del cliente: </label>
                    <input type="email" placeholder="Ingrese el correo del cliente" class="form-control" name="correoCliente"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Tipo de cliente: </label>
                    <input type="text" placeholder="Ingrese el tipo del cliente" class="form-control" name="tipoCliente"> 
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
