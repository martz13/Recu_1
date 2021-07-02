<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pagina Web-CSS</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="./css.css">
	</head>
	<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Papelería</a>
			  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			  	</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  	<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Inicio</a>
				  	</li>
				  	<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
				  	</li>
				  	<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  	Dropdown
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					  		<li><a class="dropdown-item" href="#">Action</a></li>
					  		<li><a class="dropdown-item" href="#">Another action</a></li>
					  		<li><hr class="dropdown-divider"></li>
					  		<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
				  	</li>
				  	<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  	</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
				  	<button class="btn btn-outline-success" type="submit">Buscar</button>
				</form>
			</div>
			</div>
		</nav>
		<!--carrusel-->
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/papeleria1.jpg" class="d-block w-100" alt="..." width="350" height="550">
					</div>
					<div class="carousel-item">
						<img src="img/papeleria2.jpg" class="d-block w-100" alt="..." width="350" height="550">
					</div>
					<div class="carousel-item">
						<img src="img/papeleria3.jpg" class="d-block w-100" alt="..." width="350" height="550">
					</div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
			<br>
			<!--fin de carrusel-->
		<div class="card" style="width: 18rem;" id="box">
			<img src="./logo.png" class="card-img-top" alt="..." width="100" height="250">
			<div class="card-body">
				<h5 id="txtesp" style="color: white;" class="card-title">Papelería</h5>
			  	<p class="card-text" style="color: white;">Ver más productos</p>
			  	<a href="https://www.officemax.com.mx/articulos-escolares?O=OrderByTopSaleDESC"  class="btn btn-outline-success">Buscar</a>
			</div>
		</div>
		<br>
		<br>
		<table class="table" >

			  	<tr align="right">
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Edad</th>
					<th scope="col">Sexo</th>
			  	</tr>

			  	<tr align="right">
					<th scope="textab">Jorge</th>
					<td class="text">Martinez Toris</td>
					<td>17</td>
					<td>Hombre</td>
			  	</tr>
			  	<tr align="right">
					<th scope="textab">Selene</th>
					<td class="text">Martínez Maldonado</td>
					<td>18</td>
					<td>Mujer</td>
			  	</tr>
			  	<tr align="right">
					<th scope="textab">Alan Cristian</th>
					<td class="text">Martínez  Maldonado</td>
					<td>17</td>
					<td>Hombre</td>
			  	</tr>
		</table>
		
		<!--imagenes-->
		<div class="d-flex justify-content-center">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary" onclick="mostrarp('Lapices')">Lapices</button>
                <button type="button" class="btn btn-primary" onclick="mostrarp('tijeras')">Tijeras</button>
                <button type="button" class="btn btn-primary" onclick="mostrarp('cuadernos')">Cuaderno</button>
				
				<button  type="button" class="btn btn-dark" onclick="mostrarp('desaparecer')">Ocultar</button> 
            </div>
	    </div>
        </br>   
            <div class="container">
		<div class="row" id="titulo1">
			<div class="col py-2 Lapices">
				<div class="card" style="width: 18rem;">
					<img src="img/lapices1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Lapices</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 tijeras">
			<div class="card" style="width: 18rem;">
					<img src="img/tijeras1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Tijeras</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 cuadernos">
				<div class="card" style="width: 18rem;">
					<img src="img/cuaderno1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Cuaderno</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 Lapices">
				<div class="card" style="width: 18rem;">
					<img src="img/lapices2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Lapices</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 tijeras">
			<div class="card" style="width: 18rem;">
					<img src="img/tijeras2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Tijeras</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 cuadernos">
				<div class="card" style="width: 18rem;">
					<img src="img/cuaderno2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Cuaderno</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 Lapices">
				<div class="card" style="width: 18rem;">
					<img src="img/lapices3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Lapices</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 tijeras">
			<div class="card" style="width: 18rem;">
					<img src="img/tijeras3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Tijeras</h5>
					</div>
				</div>
			</div>
			<div class="col py-2 cuadernos" >
				<div class="card" style="width: 18rem;">
					<img src="img/cuaderno3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Cuaderno</h5>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!--	-->
		<script> 
			function alertar(){
				alert('Error');		
			}
			function mostrarp(tipo){
				var mostrar= document.getElementsByClassName(tipo);
				var grupaudi= document.getElementsByClassName('Lapices');
				var gruptijeras= document.getElementsByClassName('tijeras');
				var grupcuadernos= document.getElementsByClassName('cuadernos');
				if(tipo == 'Lapices'){
					for(var i=0; i<mostrar.length; i++){	
						grupaudi[i].classList.remove("desaparecido");
						gruptijeras[i].classList.add("desaparecido");	
						grupcuadernos[i].classList.add("desaparecido");	
					}
				}else if(tipo=='tijeras'){
					for(var i=0; i<mostrar.length; i++){
						gruptijeras[i].classList.remove("desaparecido");
						grupaudi[i].classList.add("desaparecido");	
						grupcuadernos[i].classList.add("desaparecido");	
					}
				}else if(tipo=='cuadernos'){
					for(var i=0; i<mostrar.length; i++){
						grupcuadernos[i].classList.remove("desaparecido");
						grupaudi[i].classList.add("desaparecido");	
						gruptijeras[i].classList.add("desaparecido");	
					}
				}else if(tipo=='desaparecer'){
					
					var y = document.getElementById("titulo1");
					y.classList.toggle("desaparecido");
				}

			}

		</script>
		<br>
		<br>
		<br>
	</body>
</html>
