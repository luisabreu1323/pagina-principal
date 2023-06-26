<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;

}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplicaciòn Web Isamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .card {
      margin: 0 auto;
      max-width: 400px;
    }
    .card-title {
      text-align: center;
    }
    .card-text {
      text-align: center;
    }
    .card {
      margin: 0 auto;
      max-width: 400px;
      background-image: url("imagen.jpg");
      background-size: cover;
      background-position: center;
      color: white;
    }
    .card-title {
      text-align: center;
    }
    .card-text {
      text-align: center;
      color: black;
    }
    .Nosotros{
    text-align: justify;
    }
  </style>
  </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Salón de Belleza Isamar Eloy</a>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="logout.php">Cerrar Sesión</a>      
  </nav>
  <section class>
  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/1920/500" class="d-block w-100" alt="...">
    </div>
    </section>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <h1 class="text-center">Datos del salón</h1>
        <hr>
        <div class="card">
          <div class="card-body">
            <p class="card-text">Nombre: Isa_Organic</p>
            <p class="card-text">Dirección: Pedrolivio Cedeño #123</p>
            <p class="card-text">Teléfono: (809) 456-7890</p>
            <p class="card-text">Correo electrónico: isamar@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="Nosotros">
  <h2 class="text-center my-5">Quienes Somos</h2>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <p>Somos un salón de belleza, que nos enorgullece ofrecerte una experiencia única y personalizada para realzar tu belleza y resaltar tu estilo. 
          Con años de experiencia en la industria de la belleza, nuestro talentoso equipo de estilistas y profesionales de la estética está dedicado a brindarte servicios excepcionales y resultados que superen tus expectativas.</p>
        <p>En nuestro salón, nos esforzamos por crear un ambiente acogedor y relajante donde puedas escapar del estrés diario y disfrutar de un merecido cuidado personal. 
          Nuestro objetivo es que te sientas rejuvenecido, renovado y con una confianza renovada después de cada visita.</p>
        <p>Valoramos a cada uno de nuestros clientes y nos enfocamos en entender tus necesidades individuales. Nos tomamos el tiempo para escucharte y asesorarte en los mejores tratamientos y servicios que se adapten a tus deseos y características únicas.
           Ya sea que estés buscando un corte de cabello y peinado elegante, un maquillaje impecable, una manicura y pedicura relajantes o tratamientos de spa revitalizantes, nuestro equipo está listo para atenderte con atención y profesionalismo.</p>
        <p>Nos mantenemos al día con las últimas tendencias y técnicas en la industria de la belleza, y utilizamos productos de alta calidad para garantizar resultados excepcionales y duraderos. 
          Además, nos comprometemos a mantener un ambiente limpio, seguro y sanitario para tu tranquilidad y bienestar.</p>
        </div>  
      <div class="col-6">
      <img src="1.jpg" alt="100" class="img-fluid">
      </div> 
    </div>   
  </div>
</section>
<section class="Nosotros">
  <h3 class="text-center my-5">Nuestros Servicio</h3>
  <div class="container">
    <div class="row">
      <div class="col-4">
      <div class="card text-center">
        <img src="3.jpg" alt="100" class="img-fluid">
        <div class="card-body">
          <h5 class="card-title">Linea Completa</h5>
          <p class="card-text">En esta linea esta todos el tratamiento que necesita para tener tu cabello lindo, limpio y brillante.</p>
      </div>
    </div>
        </div>  
        <div class="col-4">
        <div class="card text-center">
        <img src="4.jpg" alt="100" class="img-fluid">
        <div class="card-body">
          <h5 class="card-title">Combo Aclarante</h5>
          <p class="card-text">Aclara todas las zonas oscuras y manchas de la piel. Aclara axilas, entre piernas y estrias.</p>
      </div>
    </div>
        </div> 
        <div class="col-4">
        <div class="card text-center">
        <img src="5.jpg" alt="100" class="img-fluid">
        <div class="card-body">
          <h5 class="card-title">Jabón intimo de Alumbre</h5>
          <p class="card-text">Sus propiedades antisepticas, astringentes y antitranpirante crean una pelicula que elimina microorganismos.</p>
      </div>
    </div> 
        </div> 
</section>
<div class="container bg-info my-5">
<div class="container bg-info py-5">
<h2 class=>Salón de Belleza Isa-  A tu Citas</h2>
    <form id="citaForm" class="mb-5">
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nombre" id="nombreInput" required>
        </div>
        <div class="col-">
          <input type="tel" class="form-control" placeholder="Teléfono" id="telefonoInput" required>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Dia de la cita" id="horaInput" required>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary">Agregar Cita</button>
        </div>
      </div>
    </form>

    <table id="citasTable" class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Dia de la Cita</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se mostrarán las citas -->
      </tbody>
    </table>
  </div>

  <!-- Librería jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Variable para mantener un contador de citas
      let citaId = 1;

      // Agregar cita
      $('#citaForm').submit(function(event) {
        event.preventDefault();

        // Obtener los valores del formulario
        const nombre = $('#nombreInput').val();
        const telefono = $('#telefonoInput').val();
        const hora = $('#horaInput').val();

        // Generar una nueva fila para la tabla
        const nuevaFila = `
          <tr id="cita${citaId}">
            <td>${nombre}</td>
            <td>${telefono}</td>
            <td>${hora}</td>
            <td>
              <button class="btn btn-sm btn-primary btn-editar" data-cita-id="${citaId}">Editar</button>
              <button class="btn btn-sm btn-danger btn-eliminar" data-cita-id="${citaId}">Eliminar</button>
            </td>
          </tr>
        `;

        // Agregar la nueva fila a la tabla
        $('#citasTable tbody').append(nuevaFila);

        // Incrementar el contador de citas
        citaId++;

        // Limpiar los campos del formulario
        $('#nombreInput').val('');
        $('#telefonoInput').val('');
        $('#horaInput').val('');

        // Mostrar mensaje de cita agregada
        alert('Cita agregada correctamente');
      });

      // Eliminar cita
      $('#citasTable').on('click', '.btn-eliminar', function() {
        const citaId = $(this).data('cita-id');
        $('#cita' + citaId).remove();
      });

      // Editar cita
      $('#citasTable').on('click', '.btn-editar', function() {
        const citaId = $(this).data('cita-id');
        const fila = $('#cita' + citaId);

        const nombre = fila.find('td:eq(0)').text();
        const telefono = fila.find('td:eq(1)').text();
        const hora = fila.find('td:eq(2)').text();

        $('#nombreInput').val(nombre);
        $('#telefonoInput').val(telefono);
        $('#horaInput').val(hora);

        fila.remove();
      });
    });



  </script>
  <!-- Agregar enlaces a los archivos JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>