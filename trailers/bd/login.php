<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : '';
$pass = md5($clave);

$consulta = "SELECT * FROM users WHERE usuario='$usuario' AND clave='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount()>= 1){
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["s_usuario"]= $usuario;

} else{
    $_SESSION["s_usuario"]= null;
    $data= null;
}
print json_encode($data);
$conexion=null;

?>