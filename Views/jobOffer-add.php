<?php 

require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Job Offer</h2>
               <form action="<?php echo FRONT_ROOT ?>Job/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                    <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Id de la empresa</label>
                                   <input type="text" name="empresaId" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Id de la posicion laboral</label>
                                   <input type="text" name="JobPositionId" value="" class="form-control">
                              </div>
                         </div>   
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Id de la Job Offer</label>
                                   <input type="text" name="DescriptionJO" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Descripcion de la job Offer</label>
                                   <input type="text" name="DescriptionJ" value="" class="form-control">
                              </div>
                         </div>
                         
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>