function validar()
{
    //
    var usuario = $("#User").val();
    var password = $("#Password").val();
    //
        if(usuario == "user" && password == "2021")
        {
            swal("Validación", "Bienvenido", "success");
        }
        else
        {
            swal("Validación", "Usuario y/o contraseña invalidos", "error");
        }
}