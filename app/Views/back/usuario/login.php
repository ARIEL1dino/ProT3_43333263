<!--Cuerpo del logueo-->
<section id="loguearse" class="container mt-5">

      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card shadow-sm">
            <div class="card-header text-center bg-white">
              <h4 class="fw-bold">Iniciar sesión</h4>
            </div>
            <div class="card-body">
              <!--Mensaje de ERROR-->
              <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning"><?=session()->getFlashdata('msg');?></div>
                    <?php endif?>
              <form method='post' action="<?php echo base_url('/enviar-login')?>">
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="correo" placeholder="Correo">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="contraseña">
                </div>
                <div class="d-flex justify-content-between">
                  <button type="submit" class="btn btn-success">Ingresar</button>
                  <button type="reset" class="btn btn-danger" href="<?php echo base_url('login'); ?>">Cancelar</button>
                </div>
              </form>
              <div class="mt-3 text-center">
                <p class="mb-0">¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>" class="text-primary">Registrarse aquí</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</section>