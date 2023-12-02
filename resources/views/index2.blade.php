<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-lKuw6zZhlE6tFOWxYQr5e0GGPzh/9vFVEBRrW8BfcSmftgG2r0exNCX2qQVdB+Ed" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-lKuw6zZhlE6tFOWxYQr5e0GGPzh/9vFVEBRrW8BfcSmftgG2r0exNCX2qQVdB+Ed"
crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>


<div id="container">
    <div id ="divSide">
    <div id="sidebar"> 

    <ul id="miMenu"><br><br><br>
        <li><a href="#" onclick="seleccionarOpcion(this)"><i class="fas fa-home"></i>Home</a></li><br><br>
        <li><a href="{{route('alumnos')}}" onclick="seleccionarOpcion(this)"><i class="fas fa-user"></i>Alumnos</a></li><br><br>
        <li><a href="" onclick="seleccionarOpcion(this)"><i class="fas fa-calendar"></i>Asignaturas</a></li><br><br>
        <li><a href="#" onclick="seleccionarOpcion(this)"><i class="fas fa-question-circle"></i>Ayuda</a></li><br><br><br><br><br>
        <li><a href="#" onclick="seleccionarOpcion(this)"><i class="fas fa-cog"></i>Configuracion</a></li>
    </ul>
</div>
    </div>
<div id="divContent">
 <div id="content"><br>
   <div id="searchContainer">
    <input type="text" id="searchInput" placeholder="Buscar...">
    <button type="button" id="searchButton">&#128269;</button>
    </div>
  
    <div id= "items">
    
<div id="aulas" >
 <div id="descripciones">
    
    
    </div>
    <div id = "img">
    <img id="icono" src="{{ asset('imagenes/aulas.png') }}" alt="Icono">
 </div>
    
</div>


<div  id = "edificios">
  <div id="descripciones"></div>

   <div id="img">
     <img id="icono2" src="{{ asset('imagenes/edi.png') }}" alt="Icono">
    </div>
       
</div>
    
<div id = "secciones">
    <div id="descripciones"></div>
     <div>
    <img id="icono3" src="{{ asset('imagenes/secciones.png') }}" alt="Icono">
    
    </div>
     </div>

        
  </div>

  <div id ="extra"></div>



  </div>
</div>


</body>
</html>