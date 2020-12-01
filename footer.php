
	<footer class="ftco-footer">
		<div class="container mb-5 pb-4">
			<h1 style="color: #F9C963">SUBSCRIBIRSE</h1>
			 <form method="post" class="bg-light p-5 contact-form" name="subscripcion" onsubmit="return validar_subscripcion()">
      <div class="form-group">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo">
      </div>
				 <div class="form-group">
        <input type="submit" name="enviar" value="enviar mensaje" class="btn btn-danger py-3 px-5">
      </div>
    </form>
			<?php
include("lamborghini_registro_subscripciones.php");

	?>	
			
			<div class="row">
				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="logo d-flex align-items-center">
							<a href="#" class="d-flex align-items-center">
								<div class="logo1">
									<img src="images/logo.png" 
			class="img-fluid" width="100px" alt="logo">
								</div>
							</a>
						</h2>
						<p>El camino que recorres es nuestra pasion</p>
						<ul class="ftco-footer-social list-unstyled mt-4">
							<li><a href="#" target="_blank"><span style="color:#000000" class="fa fa-twitter"></span></a></li>
							<li><a href="#" target="_blank"><span style="color:#000" class="fa fa-facebook" ></span></a></li>
							<li  ><a href="#" target="_blank"><span  class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">PAGINAS</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span  style="color:#F9C963 " class="fa fa-chevron-right mr-2"></span>INICIO</a></li>
							<li><a href="#"><span style="color:#F9C963 " class="fa fa-chevron-right mr-2"></span>MODELOS</a></li>
							<li><a href="#"><span style="color:#F9C963 " class="fa fa-chevron-right mr-2"></span>INNOVACION Y EXCELENCIA</a></li>
							<li><a href="#"><span style="color:#F9C963 " class="fa fa-chevron-right mr-2"></span>SOBRE NOSTROS</a></li>
							<li><a href="#"><span style="color:#F9C963 " class="fa fa-chevron-right mr-2"></span>CONTACTO</a></li>
							
						</ul>
					</div>
				</div>

				<div class="col-lg col-md-6">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Tienes alguna duda?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span style="color:#F9C963" class="fa fa-map-marker mr-3"></span><span class="text">West Broward Imports, LLC

4645 Volunteer Rd

FL 33330 Davie, United States</span></li>
								<li><a href="#"><span style="color:#F9C963" class="fa fa-phone mr-3"></span><span class="text">+1 (899) 333-5822</span></a></li>
								<li><a href="#"><span style="color:#F9C963" class="fa fa-paper-plane mr-3"></span><span class="text">lamborghini@volksvagen.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-primary py-5">
			<div class="row">
				<div class="col-md-12 text-center">
					
					<p class="mb-0">
						DERECHOS RESERVADOS &copy;<script>document.write(new Date().getFullYear());</script> LAMBORGHINI </p>
					</div>
				</div>
			</div>
		</footer>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		
		<script src="js/main.js"></script>

<script>
	   
function validar_subscripcion(){

    if ( document.subscripcion.nombre.value == ""){
        alert('Ingrese un nombre  valido.');
        return false
        }

       
        
        if ( document.subscripcion.correo.value == ""){
            alert('Ingrese un correo electronico valido.');
            return false
            }

}
	   
	   
	   </script>
	   


	</body>
	</html>