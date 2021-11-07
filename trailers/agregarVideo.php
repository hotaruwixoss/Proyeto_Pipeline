<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrar Video</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

<a class="btn btn-primary" href="cerrarsesion.php" role="button">Cerrar</a>
     
  <div class="container mt-5 pd-5">
    <h2 class="text-center">Registrar Video para la web</h2>
    <hr>

    <form action="recibVideoYoutube.php" method="post">
    <div class="form-group">
      <label for="nombreVideo">Nombre del Video</label>
      <input type="text" name="nombreVideo" class="form-control">
    </div>
    <div class="form-group">
      <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
      <input type="text" name="urlVideo" class="form-control">
    </div>

    <div class="form-group">
      <label for="descripcionVideo">Descripcion del Trailer</label>
      <input type="text" name="descripcionVideo" class="form-control">
    </div>

      <div class="form-group mb-5">
        <button type="submit" class="btn btn-primary  btn-lg btn-block">Registrar Video</button>
    </div>

  </form>


<br><br>
<br><br>
  <?php 
   require("config.php");
    $sqlVideo   = ("SELECT * FROM videos ORDER BY id DESC");
    $queryVideo = mysqli_query($con, $sqlVideo);

  ?>

<h2 class="text-center mt-5 mb-3">Trailers de Peliculas</h2>
  <div class="table-responsive">
    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th>Nombre de Pelicula</th>
          <th class="text-center">Video</th>
          <th>Url del Video</th>
          <th class="text-center">Descripcion</th>
           <th>Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while ($dataVideo = mysqli_fetch_array($queryVideo)) { ?>
        <tr>
          <td><?php  echo $dataVideo['nombreVideo']; ?></td>
          <td>
            <iframe width="253" height="200" src="<?php echo $dataVideo['urlVideo']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </td>
          <td>
            <?php echo $dataVideo['urlVideo']; ?>
          </td>
          <td>
            <?php echo $dataVideo['descripcionVideo']; ?>
          </td>
          <td>
            <a href="deleteVideoYoutube.php?idVideo=<?php echo $dataVideo['id']; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el Video?');">Eliminar</a>
          </td>

          <td>
          <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editars<?php echo $dataVideo['id']; ?>">Editar</button>
          </td>
        </tr>
            <!--Ventana Modal para Actualizar--->
            <?php  include('ModalEditar.php'); ?>

      <?php } ?>
      </tbody>
    </table>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>