          <div class="row">
          <div class="col-lg-12">
           <br><br>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Agregar Proveedor</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form action="<?php echo base_url().'crud_proveedor/agregar'; ?>" id="mi_form" method="post" role="form" name="mi_form">
              
              <div class="form-group">
                <label>Nombre del Proveedor</label>
                <input name="nombre_provee" required="required" class="form-control">
              </div>

               <div class="form-group">
                <label>Telefono</label>
                <input name="telefono_provee" required="required" class="form-control">
              </div>

               <div class="form-group">
                <label>Email</label>
                <input name="email_provee" required="required" class="form-control">
              </div>

              <div class="form-group">
                <label>Direccion</label>
                <input name="direccion_provee" required="required" class="form-control">
              </div>
               <div class="form-group">
                <label>Nit</label>
                <input name="nit" required="required" class="form-control">
              </div>

              <div class="form-group">
                     <button type="button" class="btn btn-primary" onclick="pregunta()" >Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_proveedor'; ?>" class="btn btn-primary">Cancelar</button>
              </div>              


            </form>
   

           </div>
        </div><!-- /.row -->
        <?= validation_errors(); ?>
         <script language="JavaScript"> 
function pregunta(){ 
    if (confirm('¿Estas seguro de enviar este formulario?')){ 
       <?= validation_errors(); ?>

       document.mi_form.submit() 
    } 
} 
</script> 
