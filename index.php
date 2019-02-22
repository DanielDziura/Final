<html lang="es">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.W.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
	<script type="text/javascript" src="js/trad.js"></script>
  </head>
    
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Aplicaciones Web A.W. </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
				<li class="active"><a href="index.php">Home</a></li>
                  
                  <li class="dropdown">
                  <a href="#" id="1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mostrar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a id="2" href="mostrar1.php">Mostrar1</a></li>
                    <li><a id="3" href="mostrar2.php">Mostrar2</a></li>
                  </ul>
                </li>
                  
                <li><a id="4" href="insertar.php">Insertar</a></li>
                  
                <li class="dropdown">
                  <a href="#" id="5" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modificar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a id="6" href="form-nom.php">Nombre</a></li>
                    <li><a id="7" href="form-localitat.php">Localidad</a></li>
                    <li><a id="8" href="form-web.php">WEB</a></li>
                    <li><a id="9" href="form-escut.php">Escudo</a></li>
                  </ul>
                </li>
                  
				<li><a id="10" href="eleminar.php">Eliminar</a></li>
                  
              </ul>
            </div>
          </div>
		  
		  <div align="right">
			<img onclick="es()" src="img/es.png">
			<img onclick="en()" src="img/en.png">
		 </div>
        </nav>
		
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Esto es un ejemplo 1</h1>
              <p>Todo el texto del caruserl es Lorem ipsum</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Saber más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Esto es un ejemplo 2</h1>
              <p>Donec at semper purus. Donec porttitor elementum metus eu rutrum. Nullam ac nulla at ligula interdum imperdiet. Praesent orci urna, fringilla eget ultricies ullamcorper, volutpat tristique magna.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Saber más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Esto es un ejemplo 3</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae dui orci. Mauris orci urna, porttitor id consectetur et, vestibulum sed enim. Morbi tristique scelerisque ligula ac tincidunt. Nulla elementum malesuada velit, et dictum tortor tristique sed.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Saber más</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/a.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Barcelonalona</h2>
          <p>El Fútbol Club Barcelona es una entidad polideportiva de Barcelona. Fue fundado como club de fútbol el 29 de noviembre de 1899. Una de las principales características del F. C. Barcelona es su carácter polideportivo.</p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="img/b.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Madrid </h2>
          <p>El Real Madrid Club de Fútbol, más conocido simplemente como Real Madrid, es una entidad polideportiva con sede en Madrid, España.</p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="img/c.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Atlético de Madrid</h2>
          <p>El Club Atlético de Madrid es un club de fútbol español de la ciudad de Madrid, fundado el 26 de abril de 1903. Su primer equipo masculino milita en la Primera División de España y disputa sus partidos como local desde la temporada 2017/18, en el Estadio Metropolitano, con capacidad de 69 829 espectadores.</p>
        </div>
      </div>

      <footer>
        <br></br>
        <p class="pull-right"><a href="#">Volver Ariva</a></p>
        <p>Aplicaciones Web A.W. IES Emili Darder</p>
      </footer>

    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
 
  </body>
</html>
