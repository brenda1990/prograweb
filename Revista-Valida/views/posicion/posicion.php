<?php include ('../layouts/header.php'); ?>
<div class="row">
      <div class="col-md-1">  
      </div>
      <div class="col-md-9">
       <h2>POSICI&Oacute;N</h2> 
        <br/>  
        <br/>
        <form methos="post" id="form_posicion" role="form">
          <div class="form-group">
            <label for="nombre">Posición:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa la posici&oacute;n" required>
          </div>

          <br />

          <div class="form-group">
            <label for="abreviatura">Abreviatura:</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ingresa la abreviatura" required />
          </div>

          <br />
          <br />

          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="col-md-2"></div>
      
    </div>

<?php include ('../layouts/footer.php'); ?>