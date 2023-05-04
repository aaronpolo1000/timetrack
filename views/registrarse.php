<link rel="stylesheet" href="style.css">
<section class="hero-section">
            <div class="container">
</div>
</section>    
            <!-- multistep form -->    
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Crear tu cuenta</li>
    <li>Detalles Personales</li>
  </ul>
  <!-- fieldsets -->
  <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
  <script src="js/register.js"></script>
  <fieldset>
    <h2 class="fs-title">Crea tu cuenta</h2>
    <h3 class="fs-subtitle">Primer paso</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Detalles Personales</h2>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <a href="https://twitter.com/GoktepeAtakan" class="submit action-button" target="_top">Submit</a>
  </fieldset>
</form>  
