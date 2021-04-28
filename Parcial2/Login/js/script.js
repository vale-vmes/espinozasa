function validar()
{
    //
    var usuario = $("#User").val();
    var password = $("#Password").val();
    //
        if(usuario == "l18100168" && password == "l168")
        {
            swal("ACCESO CONSEDIDO", "¡Bienvido!", "success");
        }
        else
        {
            swal("ACCESO DENEGADO", "Usuario y/o contraseña invalidos", "error");
        }
}