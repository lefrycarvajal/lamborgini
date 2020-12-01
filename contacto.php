<?php
include_once("header.php")
?>
<nav  class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-dark" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand d-flex align-items-center" href="index.html"><img src="images/logo.png" 
			class="img-fluid" width="100px" alt="logo"></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu" ></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li ><a href="index.php" class="nav-link">INICIO</a>
					</li>
					<li class="nav-item"><a href="modelos.php" class="nav-link">MODELOS</a></li>
				
					<li class="nav-item"><a href="innovacion_excelencia.php" class="nav-link">INNOVACIÓN Y EXCELENCIA</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">SOBRE NOSTROS</a>
					<li class="nav-item active"><a href="#" class="nav-link">CONTACTO</a></li>

				</ul>
			</div>
		</div>
	</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/01.COVER.jpg');" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <h1 class="mb-3 bread" style="color: white">CONTACTO</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex contact-info mb-5">
     


</div>
<div class="row no-gutters block-9">
  <div class="col-md-6 order-md-last d-flex">
    <form method="post" class="bg-light p-5 contact-form" name="contacto" onsubmit="return validar_contacto()">
      <div class="form-group">
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo">
      </div>
      <div class="form-group">
        <input type="text" id="tema" name="tema" class="form-control" placeholder="Tema">
      </div>
      <div class="form-group">
        <textarea id="mensaje" name="mensaje" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="enviar" value="enviar mensaje" class="btn btn-danger py-3 px-5">
      </div>
    </form>
    
  </div>

  <div class="col-md-6 d-flex">
   <div class="img w-100" style="background-image: url(images/hp_banner_03_m.jpg);"></div>
 </div>
</div>
<br>	  
<br>
	  <?php
include("lamborghini_registro_contacto.php");

	?>	
<div class="row">
 <div class="col-md-12">
	 
   <div class="bg-white">
	   <div class="container">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.166516437978!2d-80.35348708510001!3d26.060813902515655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a73d1e59a467%3A0x8bbad3a591c90218!2sLamborghini%20Broward!5e0!3m2!1ses!2sdo!4v1606750174570!5m2!1ses!2sdo" width="90%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
 </div>
</div>
	</div>
</div>
</section>
</div>
  <script>
	   
function validar_contacto(){

    if ( document.contacto.nombre.value == ""){
        alert('Ingrese un nombre  valido.');
        return false
        }
	
	  if ( document.contacto.correo.value == ""){
            alert('Ingrese un correo electronico valido.');
            return false
            }
	

        if ( document.contacto.tema.value == ""){
            alert('Ingrese un tema.');
            return false
            }
        
      
    
              
	
	if(document.contacto.mensaje.value.length <10){
alert('Comenta mas de 10 caracteres')
return false;
}
                    
                    
        
    

}
	   
	   
	   </script>
	   

	 
	 





<?php
include_once("footer.php")
?>
