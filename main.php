/*
//hacer referencia al formulario de usuarios para controlar el evento sumbit
$("#formlogin").submit(function(e) {
    e.preventDefault(); //evita el comportamiento por defecto del form al cargar la pagina
    var usuario = $.trim($("#usuario").val()); //limpiamos el campo capturado
    var password = $.trim($("#password").val());

    //validar que no queden los campo en blanco
    if (usuario.length == "" || password.length == "") {
        Swal.fire({
            icon: 'warning',
            title: 'Debe digitar el Usuario y el Password',
        });
        return false;
    } else {
        //usar ajax para enviar los datos capturados
        $.ajax({
            url: './bd/login.php',
            type: 'POST',
            datatype: 'json',
            data: { usuario: usuario, password: password },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Usuario y Password Incorrectos',
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'SESION INICIADA!',
                        confirmButtonColor: '#48B4F6',
                        confirmButtonText: 'INGRESAR',
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = '../ProyectoHospital/principal.php';
                        }
                    });
                }
            }
        });
    }
});
*/