function validar()
{
    //
    var usuario = $("#User").val();
    var password = $("#Password").val();
    //
        if(usuario == "18100168" && password == "168")
        {
            swal("ACCESO CONCEDIDO", "¡Bienvido!", "success");
        }
        else
        {
            swal("ACCESO DENEGADO", "Usuario y/o contraseña incorrectos", "error");
        }
}