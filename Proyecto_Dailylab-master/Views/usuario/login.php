

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="Views/css/loginyregistro.css">
<script src="https://kit.fontawesome.com/64d58efce2.js"
crossorigin="anonymous"></script>

<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="?c=usuario&a=validate" method="post"> 
          <h2 class="title">Ingresa</h2>
          <label class="izq"  for="email" >Ingresa tu Email</label>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="Correo_Electronico" type="text" placeholder="Usuario" />
            </div>
            <label class="izq" for="password" >Ingresa tu Contraseña</label>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="Contrasena_Usuario" type="password" placeholder="contrasena" />
            </div>
            <input type="submit"  class="btn solid" /> 
            <p class="social-text">Siguenos en nuestras redes sociales porfis</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>

        <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>  ¿No tienes una cuenta?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <br>
            <!--<a class="boton" id="sign-up-btn" href="?c=usuario&a=registro"> -->
            <a class="boton" id="sign-up-btn" href="?c=usuario&a=registro">
              Registrate
             </a>
          </div>
          
          <img src="Views/multimedia/logo.png" class="image" alt="" />
        </div>
</div>
</div>
</form>
