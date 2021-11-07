<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert/sweetalert2.min.css">
    <title>Document</title>
</head>
<body>
    
<div id="login">
<h3 class="text-center text-white display-4 titulo">
<strong>
    ADMINISTRADOR DE TRAILERS
</strong>
</h3>
<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">

            <div id="login-box" class="col-md-12 bg-light text-dark">
           <form id="formlogin" class="form" action="" method="post">
               <h3 class="text-center text-dark">Iniciar Sesion</h3>
               <div class="form-group">
                   <label for="usuario" class="text-dark">Usuario</label>
                   <input type="text" name="usuario" id="usuario" class="form-control">
               
                </div>
               <div class="form-group">
                   <label for="clave" class="text-dark">Clave</label>
                   <input type="password" name="clave" id="clave" class="form-control">
               
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="conectar">

                </div>



           </form>
            </div>

        </div>
    </div>
</div>
</div>





<script src="jquery/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="codigo.js"></script>
</body>
</html>