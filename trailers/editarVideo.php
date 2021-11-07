<?php
include('config.php');
$idVideo    	  =$_REQUEST['id']; 
$nombreVideo      =$_REQUEST["nombreVideo"];
$urlVideo         =$_REQUEST["urlVideo"];
$descripcionVideo =$_REQUEST["descripcionVideo"];
$fecha            =date("d-m-Y g:i a");

//https://www.youtube.com/watch?v=MxhasqDtq1s
$cantidad_url_video 	= strlen($urlVideo);
if ($cantidad_url_video == '28') {
	$cortar_url 			= str_replace ('https://youtu.be/','',$urlVideo);
	$url_final_video 		= 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '41') {
	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '43') {
	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '58') {
	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '60') {
	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
}else{
echo "URL INVALIDA";
}


$update=("UPDATE videos 
    SET 
    nombreVideo ='".$nombreVideo."',
    urlVideo ='".$url_final_video."',
    descripcionVideo ='".$descripcionVideo."',
    fecha ='".$fecha."'

WHERE id= '".$idVideo."'
");

$result_update= mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='agregarVideo.php';
    </script>";

?>
