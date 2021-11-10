<?php

     //Archivo donde se puede agregar un alumno, SOLO ADMINISTRADOR PUEDE ACCEDER

    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container ">
               <h2 class="mb-4">Agregar alumno</h2>
               <form action="<?php echo FRONT_ROOT ?>Student/Add" method="POST" class="bg-light-alpha p-5 shadow">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="firstName" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Apellido</label>
                                   <input type="text" name="lastName" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">id de Carrera</label>
                                   <input type="number" name="careerId" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">dni</label>
                                   <input type="number" name="dni" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Numero de telefono</label>
                                   <input type="text" name="phoneNumber" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Genero</label>
                                   <input type="text" name="gender" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Fecha de nacimiento</label>
                                   <input type="date" name="birthDate" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Contraseña</label>
                                   <input type="text" name="pasword" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Numero de Archivo</label>
                                   <input type="number" name="fileNumber" value="" class="form-control">
                              </div>
                              <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Activo (1=SI,0=NO) </label>
                                   <input type="" name="active" value="" class="form-control">
                              </div>
                              
                             
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>