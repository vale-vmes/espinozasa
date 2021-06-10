$('document').ready(function () 
{
    $.post('Productos.php', function (parametro) {
                 $("#tabla").jsGrid({  //HACE
                 width: "100%",
                 height: "500px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: parametro,
                 onItemDeleted: function(args) {   console.log(args.item);  },
                 fields: [{ name: "ID_PRODUCTO",type: "text",title: "ID",         width: 15,validate: "required"},
                         { name: "NOMBRE",    type: "text",title: "Nombre",     width: 100},
                         { name: "CATEGORIA", type: "text",title: "Categoría", width: 40},
                         { name: "MARCA", type: "text",title: "Marca", width: 40},
                         { name: "PRECIO",     type: "text",title: "Precio",      width: 30},
                         { name: "DESCRIPCION",     type: "text",title: "Descripción",  width: 80},
                         { type: "control"}],
                });
            }
    ,'json');
});