<!--Cuewrpo del registro-->
<section id="registrarse" class="container mt-5">
      
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-header text-center bg-white">
              <h4 class="fw-bold">Registrarse</h4>
            </div>
            <div class="card-body">
        <?php $validation = \Config\Services::validation();?>
              <form method='POST' action="<?php echo base_url('/enviar-form')?>">
                <?=csrf_field();?>
                <?=csrf_field();?>
                <?php if(!empty (session()->getFlashdata('fail'))):?>
                    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                    <?php endif?>
                        <?php if(!empty (session()->getFlashdata('success'))):?>
                        <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
                        <?php endif?>
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">
                        <!--Error Nombre-->
                        <?php if($validation->getError('nombre')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?=$error = $validation->getError('nombre'); ?>
                            </div>
                        <?php }?>
                        <!--Fin Error-->
                </div>
                <div class="mb-3">
                  <label for="apellido" class="form-label">Apellido</label>
                  <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">
                  <!--Error Apellido-->
                        <?php if($validation->getError('apellido')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?=$error = $validation->getError('apellido'); ?>
                            </div>
                        <?php }?>
                        <!--Fin Error-->
                  
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="correo" type="email" class="form-control" id="email" placeholder="correo@algo.com">
                  <!--Error Correo-->
                        <?php if($validation->getError('correo')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?=$error = $validation->getError('correo'); ?>
                            </div>
                        <?php }?>
                        <!--Fin Error-->

                </div>
                <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario</label>
                  <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Usuario">
                  <!--Error Usuario-->
                        <?php if($validation->getError('usuario')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?=$error = $validation->getError('usuario'); ?>
                            </div>
                        <?php }?>
                        <!--Fin Error-->
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input name="contraseña" type="password" class="form-control" id="password" placeholder="Contraseña (mínimo 5 caracteres)">
                  <!--Error Contraseña-->
                        <?php if($validation->getError('contraseña')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?=$error = $validation->getError('contraseña'); ?>
                            </div>
                        <?php }?>
                        <!--Fin Error-->
                </div>
                <div class="d-flex justify-content-between">
                  <button type="submit" value="guardar" class="btn btn-success">Guardar</button>
                  <button type="reset" value="cancelar" class="btn btn-danger">Cancelar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
</section>