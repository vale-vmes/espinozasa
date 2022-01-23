async function obtenerDatos(){
    const response = await fetch("http://127.0.0.1:5500/Practicas/Ejercicio%20json/datos.json");
   
    //manipulando texto plano
    //const jsontext = await response.text();
    //console.log('texto plano');
    //console.log(json); muestra el texto plano de json
    //console.log(JSON.parse(jsontext)); //función que le da un formato en consola, covierte la cadena de texto (JSON) en un objeto json (json)
    //console.log(JSON.stringify(jsontext)); //transforma un objeto json a una cadena de texto

    //manipulando un objeto json
    const json = await response.json();
    console.log('---------objeto json---------');
    console.log(json); //función que manipula directo el objeto json ya que ya no se declaró como texto plano lin14
    //consultar información específica
    console.log('---------información específica---------');
    console.log(json.nombre); //propiedad
    console.log(json.direccion.calle); //propiedad dentro de propiedad
    console.log(json.lenguajes);//propiedad con arreglos
    
    //navegación en un arreglo para obtener propiedades específicas usando foreach
    console.log('---------foreach experiencia.empresa---------');
    json.experiencia.forEach((elemento) => {
        console.log(elemento.empresa);
    });
    console.log('---------foreach experiencia.anios---------');
    json.experiencia.forEach(element => {
        console.log(element.anios);
    });
    console.log('---------otra forma de obtener info---------');
    console.log(json.direccion.pago_luz);
    console.log(json["direccion"]["pago_luz"]);
    console.log(json.direccion["pago_luz"]);
}

obtenerDatos();
