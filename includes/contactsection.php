<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>!Agenda tu cita¡</h2>
          <p>PORFAVOR MANDA TU SOLICITUD DE CITA PARA PODER AGENDARTE Y ENVIARTE POR CORREO O BIEN VIA WHATSAPP GENERAR TU CITA.</p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate action="cita.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required" name="nombrecita">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required" name="correocita">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required name="mensajecita"></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>INFORMACIÓN DE CONTACTO</h4>
        <p><span>Dirección</span>Joaquín Paredes Colin 238, Industrial Jorge Carreño, 75766 Tehuacán, Pue.<br>
          </p>
      </div>
      <div class="contact-item">
        <p><span>Teléfono</span> +52 238 392 0923</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> gpebonillavidl@hotmail.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/InovadentSD"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.facebook.com/InovadentSD"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/InovadentSD"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.facebook.com/InovadentSD"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>