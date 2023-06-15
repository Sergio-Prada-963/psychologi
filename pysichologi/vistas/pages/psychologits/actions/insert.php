<?php $url = "http://localhost/ArTeM02-062/php/psychologi/apirest/controles/psycologas.php?op=insert"; 
    
    //$curl = curl_init();
    //curl_setopt($curl, CURLOPT_URL, $url);
    //curl_setopt($curl, CURLOPT_POST,1);
    //curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    //$ouput = json_decode(curl_exec($curl));
    //print_r($ouput);
?>

<div class="content-wrapper">
    <div class="card-header">
      <h3 class="card-title">Añadir Psicologa</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputEspecialidad">Especialidad</label>
            <input type="text" class="form-control" id="exampleInputEspecialidad" placeholder="Enter Especialidad" name="especialidad">
          </div>
          <div class="form-group">
            <label for="exampleInputEdad">Edad</label>
            <input type="number" class="form-control" id="exampleInputEdad" placeholder="Enter Edad" name="edad">
          </div>
          <div class="form-check">
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
          </div>
        </div>
    </form>
</div>

