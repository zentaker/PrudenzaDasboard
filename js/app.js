$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["excel", "print"],
        "language": {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior',
                last: 'Ultimo',
                first: 'Primero',

            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            emptyTable: 'No hay registros',
            infoEmpty: '0 registros',
            search: "Buscar:"


        }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,

    });
});


$('#crear_registro').attr('disabled', true)

$('#crear_registro_admin').attr('disabled', true);
    
    $('#repetir_password').on('input', function() {
        var password_nuevo = $('#password').val();
        
        if($(this).val() == password_nuevo ) {
            $('#resultado_password').text('Correcto');
            $('#repetir_password').addClass('is-valid').removeClass('is-invalid');
            $('input#password').addClass('is-valid').removeClass('is-invalid');
            $('#crear_registro').attr('disabled', false)
        } else {
            $('#resultado_password').text('No son iguales!');
            $('#repetir_password').addClass('is-invalid').removeClass('is-valid');
            $('input#password').addClass('is-invalid').removeClass('is-valid');
        }
    });
      