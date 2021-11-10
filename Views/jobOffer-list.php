<?php

// lista las JobOffer

require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de ofertas laborales</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Descripcion</th>
                         <th>Cantidad de aplicantes</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($JobList as $job){
                                   ?>
                                        <tr>
                                             <td><?php echo $job->getDescriptionJ() ?></td>
                                             <td><?php echo $job->getApplicants() ?></td>
                                         </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>