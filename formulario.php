<?php
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="img/Imagen1.png" type="image/png">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>


<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <a class="navbar-brand logo_h" href="index.html"><img src="img/Imagen1.png" width="125" height="125" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="infor.html">Información</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="projects.html"></a>
                                <li class="nav-item"><a class="nav-link" href="manos_que_impulsan.html">Manos que Impulsan</a></li>
                            </ul>
                        </li>
                          <li class="nav-item active"><a class="nav-link" href="formulario.php">Registros</a></li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacto</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a class="nav-link" href="contact.html">Sing Up</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="#"></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<section class="banner_area">
    <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>FORMULARIO</h2>
                    <div class="page_link">
                        <a href="index.html">Inicio</a>
                        <a href="formulario.php">Formulario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="card">
    <div class="card-body" style="background-color:#EEEEEE ;">
        <form>
            <h4>PACIENTE</h4><br>
            <div class="form-row">

                <div class="form-group col-md-4">

                    <label>Nombres</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group col-md-3">
                    <label>Apellido Paterno</label>
                    <input type="text" name="appl" class="form-control"  placeholder="Apellido Paterno">
                </div>

                <div class="form-group col-md-3">
                    <label>Apellido Materno</label>
                    <input type="text" name="apml" class="form-control"  placeholder="Apellido Materno">
                </div>
                <div class="form-group col-md-2">
                    <select class="form-control" name="muni">
                        <option value="" disabled selected>Seleccione su Edad</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>

                    </select>
                    </select>
                </div>

        </form>

    </div>
</div> <br>
<div class="card">
    <div class="card-body" style="background-color:#EEEEEE ;">

        <form>
            <h4>TUTOR</h4><br>
            <div class="form-row">

                <div class="form-group col-md-4">

                    <label>Nombres</label>
                    <input type="text" name="name" class="form-control"  placeholder="Nombre">
                </div>
                <div class="form-group col-md-4">
                    <label>Apellido Paterno</label>
                    <input type="text" name="appl" class="form-control"  placeholder="Apellido Paterno">
                </div>

                <div class="form-group col-md-4">
                    <label>Apellido Materno</label>
                    <input type="text" name="apml" class="form-control"  placeholder="Apellido Materno">
                </div>
                <div class="form-group col-md-4">
                    <label>Direccion</label>
                    <input type="text" name="address" class="form-control" placeholder="Colonia">
                </div>
                <div class="form-group col-md-4">
                    <label>Calle</label>
                    <input type="text" name="calle" class="form-control"  placeholder="Calle">
                </div>
                <div class="form-group col-md-4">
                    <label>Numero</label>
                    <input type="text" name="num" class="form-control"  placeholder="Numero exterior">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Ciudad</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <select  class="form-control" name="state">
                        <option selected>Hidalgo</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <select class="form-control" name="muni">
                        <option value="" disabled selected>Seleccione su Municipio</option>
                        <option value="Pachuca de soto">Pachuca de Soto</option>
						<option value="Tulancingo De Bravo">Tulancingo De Bravo</option>
                        <option value="Acatlan">Acatlan</option>
                        <option value="Acaxochitlán">Acaxochitlán</option>
                        <option value="Actopan">Actopan</option>
                        <option value="Ajacuba">Ajacuba</option>
                        <option value="Alfajayucana">Alfajayucan</option>
                        <option value="Almoloya">Almoloya</option>
                        <option value="Apan">Apan</option>


                    </select>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Codigo Postal</label>
                    <input type="text" class="form-control" name="zip">
                </div>
            </div>
            <div class="form-group">

            </div>
            <button type="submit" class="btn btn-outline-danger">Enviar</button>
        </form>
    </div>
</div><br>
<footer class="footer_area">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-4 ">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>"Manos que Impulsan"</h3>
        					</div>
        					<p  style="text-align: justify;">
							Se parte de este equipo de Desarrollo Humano Cada vez más personas son Beneficiadas
							</p>
        					<p>© 2019 La información publicada en este sitio es propiedad intelectual de Fundación Brazos Firmes. v2.0</p>
        				</aside>
        			</div>
        			   <div class="col-lg-4 ">
                        <aside class="f_widget ab_widget">
                            <div class="f_title">
                                <h3>Tu Puedes Donar</h3>
                            </div>
                            <p  style="text-align: justify;">
                               Somos una organización que realiza sus actividades mediante la gestión de recursos públicos y privados, funcionando también con la aportación de nuestros integrantes.
								Estamos muy agradecidos con todos nuestros patrocinadores, tú también puedes se parte de ellos.
								Pregunta en nuestro correo: brazosfirmesac@gmail.com

                            </p>
                        </aside>
                    </div>
        			<div class="col-lg-4">
						<aside class="f_widget social_widget">
							<div class="f_title">
								<h3>Redes Sociales</h3>
							</div>
							<p>Síguenos En Redes Sociales</p>
							<ul class="list">
					            <li><a href="https://www.facebook.com/brazosfirmes/"><i class="fa fa-facebook" width="180" height="180"></i></a></li>
                                <li><a href="https://www.instagram.com/fundacionbrazosfirmes/?hl=es-la"><i class="fa fa-instagram" width="180" height="180"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCj7fOi5HIrTHTy8oqRYArrQ"><i class="fa fa-youtube" width="180" height="180"></i></a></li>
                           
						</ul>
						</aside>
        			</div>
        		</div>
        	</div>
        </footer>


<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Muchas Gracias</h2>
                <p>Su mensaje fue enviado exitosamente</p>
            </div>
        </div>
    </div>
</div>



<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Ups! Su mensaje no fue enviado</h2>
                <p> Algo salio Mal...Intentelo Mas Tarde!

                </p>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="vendors/counter-up/jquery.counterup.js"></script>
<!-- contact js -->
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>
