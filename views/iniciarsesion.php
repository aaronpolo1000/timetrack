<section class="vh-100 bg-image" style="css/iniciarsesion.css">
  <link rel="stylesheet" href="css/iniciarsesion.css">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <img style="height:120px; width:120px; margin-left:40%;" src="images/iconuser.png" alt="">
              <h2 style="margin-top:20px;" class=" text-center mb-5">Iniciar sesión</h2>

              <form method="POST" action="exelogin.php">

                <div style="margin-top:-40px;" class="form-outline mb-4">
                  
                <i class="bi-person-fill"></i><label style="margin-left:10px;" class="form-label" name="usu" for="form3Example3cg">Usuario</label>  
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg" />
                    
                </div>

                <div class="form-outline mb-4">
                <i class="bi-lock-fill"></i><label style="margin-left:10px;" class="form-label" name="contra" for="form3Example4cg">Contraseña</label>
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>
            
                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" >Acceder</button>
                </div>

                <div class="d-flex justify-content-center">
                <p class="text-center text-muted mt-5 mb-0"><a href="registrarse.php">¿No tenés una cuenta?</a></p>
                </div>

              </form>


            </div>
          </div>
        </di0v>
      </div>
    </div>
  </div>
</section>