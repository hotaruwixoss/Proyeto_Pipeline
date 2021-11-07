$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var clave = $.trim($("#clave").val());

    if(usuario.length=="" || clave==""){

        Swal.fire({
            type: 'error',
            title: 'Usuario y clave vacios!'


        });
        return false;
    } else{
        $.ajax({
            url:"bd/login.php",
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, clave:clave},
            success: function(data){
              //  alert(data);
                if(data=="null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario o clave incorrectos',
                    }); 
                }else{
                    Swal.fire({

                        type:'success',
                        title:'Conexion exitosa!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar' 
                    }).then((result) => {
                        if(result.value){
                            window.location.href = "agregarVideo.php"
                        }
                    })
                }
                

            }
        });
     
      }


    
});