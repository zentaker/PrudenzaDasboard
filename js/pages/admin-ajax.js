$(document).ready(function () {
    $('#guardar-registro').on('submit', function (e) {
        e.preventDefault(); // no se ejecute el modelo-admin.php
        
        var datos = $(this).serializeArray(); // obtener los datos del formulario
        console.log(datos); // muestra los datos en consola
        $.ajax({
            type: $(this).attr('method'), // leee el metodo post del formulario
            data: datos, // envia los datos
            url: $(this).attr('action'), // a donde se va a enviar los datos modelo-admin.php
            dataType: 'json',
           
            success: function (data) { // respuesta que nos devueve la consulta ajax
                console.log(data)
                
                var resultado = data;
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto',
                        'El administrador se creo corerctamente',
                        'success'
                      )
                    
                } else {
                     
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un error!',
                        footer: '<a href>Por que me da este error?</a>'
                    })
                }
            }
        })
    });

    //eliminar un registro
    $('.borrar_registro').on('click', function (e) {
        e.preventDefault(); //cancelar el comportamiento por default
        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');
        Swal.fire({
            title: 'Estas seguro?',
            text: "Un registro eliminado no se puede recuperar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'Cancelar'
        }).then(function () {
            $.ajax({
                type: 'post',
                data: {
                    'id': id,
                    'registro': 'eliminar' // funcion que va a filtrar en el php
                },
                url: 'funciones/modelo-' + tipo + ".php", //llama al archivo php
                success: function (data) {
                    var resultado = JSON.parse(data) //convertir el string en un objeto
                    if (resultado.respuesta == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'Registro eliminado.',
                            'success'
                        ),
                        jQuery('[data-id="' + resultado.id_eliminado + '"]').parents('tr').remove();
                        
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'No se pudo eliminar!',
                            footer: '<a href>Why do I have this issue?</a>'
                          })

                    }
                    
                }
            })
              
        });

    

    });

    $('#login-admin').on('submit', function (e) {
        e.preventDefault();
        
        var datos = $(this).serializeArray();

        
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var resultado = data;
                if (resultado.respuesta === 'exitoso') {
                    Swal.fire(
                        'Login Correcto',
                        'Bienvenido ' + resultado.usuario + '',
                        'success'
                    ), setTimeout(function() {
                        location.href = "admin.php";
                          
                      }, 2000)
                    
                } else {
                     
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario o pasword incorrecto',
                        footer: '<a href>Por que me da este error?</a>'
                    })
                }
            
            }
        })
    });
    


    
});