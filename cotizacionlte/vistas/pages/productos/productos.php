<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Productos</li>
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
                <h3 class="card-title">Seccion de Productos </h3>

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
                        <h1>Productos...</h1>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Añadir Nuevo
                        </button>
                    </div>
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Costo por Dia</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Disponible</th>
                        <th scope="col" class="row col-12">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($all as $key => $value){
                        ?>
                        <tr>
                          <td><?= $value['id_productos'] ?></td>
                          <td><?= $value['nombreProducto'] ?></td>
                          <td><?= $value['costoDia'] ?></td>
                          <td><?= $value['descripcion'] ?></td>
                          <td><?= $value['marca'] ?></td>
                          <td><?php if($value['disponible'] == 1){echo "Disponible";}else{echo "No Disponible";} ?></td>
                          <td class="row gap-2 col-12">
                            <a class="btn btn-danger" href="../backend/acciones/productos/borrarProducto.php?id=<?= $value['id_productos'] ?>&req=delete">BORRAR</a>
                            <a class="btn btn-primary" href="../backend/acciones/productos/editarProducto.php?id=<?=$value['id_productos']?>">Editar</a>
                          </td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                    </table>
                </section>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Nuestros Productos...
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
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Producto...</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: rgb(231, 253, 246);">
                <form class="col d-flex flex-wrap" action="../backend/acciones/productos/registrarProducto.php" method="post">
                  <div class="mb-1 col-12">
                    <label class="form-label">Nombre del producto: </label>
                    <input type="text" placeholder="Ingrese el nombre del producto" class="form-control" name="nombreProducto"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label class="form-label">Costo por dia: </label>
                    <input type="number" placeholder="Ingrese costo por dia del Producto" class="form-control" name="costoDia"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Descripcion del producto: </label>
                    <input type="text" placeholder="Ingrese la descripcion del producto" class="form-control" name="descripcion"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Marca del Producto: </label>
                    <input type="text" placeholder="Ingrese la marca del producto" class="form-control" name="marca"> 
                  </div>
                  <div class="mb-1 col-12">
                    <label>Disponibilidad: </label>
                    <select class="form-select" aria-label="Default select example" id="empleado_id" name="disponible" required>
                        <option selected >Seleccione si el producto esta disponible</option>
                        <option value="1">Producto Disponible</option>
                        <option value="0">Producto NO disponible</option>
                    </select>
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
