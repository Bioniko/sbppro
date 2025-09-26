<section class="site-section bg-light" id="contact-section" data-aos="fade" style="background-color: #e9eaf4 !important;padding: 0% 0% 4% 0%;">
    <div class="container" style="background-color: #e9eaf4;">
        <div class="row" style="background-color: #e9eaf4;">
            <div class="col-md-12 mb-5">
                <form action="enviar_formulario.php" class="p-5" style="background-color: #e9eaf4" method="POST" id="miFormulario">
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Nombre</label>
                            <input type="text" id="fname" class="form-control" name="nombre">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Apellido</label>
                            <input type="text" id="lname" class="form-control" name="apellido">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Teléfono</label> 
                            <input type="tel" id="email" class="form-control" name="telefono">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Correo</label> 
                            <input type="email" id="subject" class="form-control" name="correo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Mensaje</label> 
                            <textarea name="mensaje" id="message" cols="30" rows="7" class="form-control" placeholder="¡Cuéntanos qué servicio te interesa!"></textarea>
                        </div>
                    </div>
                    <!-- Campo oculto -->
                    <input type="hidden" name="ip_usuario" id="ip_usuario" value="<?php echo $ip; ?>">
                    <!-- Campo oculto -->
                    <!-- Aquí va el reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6Lcbo6srAAAAADYwIJOuornEfOEb0pOF4wW-3cSN"></div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>