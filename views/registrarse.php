<link rel="stylesheet" href="css/registrarse.css">
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <img style="height:120px; width:120px; margin-left:40%;" src="images/iconuser.png" alt="">
              <h3 style="margin-top:20px;" class=" text-center mb-5">¡Registrate en TimeTrack!</h3>
              <form method="POST" action="register.php">
                <div style="margin-top:-30px;" class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Nombre de usuario</label>
                  <input type="text" name="nombre" id="form3Example1cg" class="form-control form-control-lg" />                  
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">E-mail</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Contraseña</label>
                  <input type="password" name="contraseña" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repetir contraseña</label>
                  <input type="password" name="contraseña2" id="form3Example4cdg" class="form-control form-control-lg" />
                  <br>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Enviar</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">¿Ya tenés cuenta? <a href="iniciarsesion.php" class="fw-bold text-body"><u>¡Inicia sesión!</u></a></p>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>