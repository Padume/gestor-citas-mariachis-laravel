function filtroTablas(ruta)
{
	var datoBuscar = document.getElementById("datoBuscar").value;
	

	var parametros =
	{
        "datoBuscar" : datoBuscar
    };

    var ruta = "http://localhost/Mariachis/public/" . ruta;

	 $.ajax({
                data:  parametros,
                url: ruta,
                type:  'get',
                beforeSend: function ()
                {
                    $("#buscarDato").html("Procesando, espere por favor...");
                },
                success:  function (data)
                {
                    $("#buscarDato").html(data);
                }

            });
}


function buscarCliente()
{
    var datoBuscar = document.getElementById("datoBuscar").value;
    

    var parametros =
    {
        "datoBuscar" : datoBuscar
    };

    var ruta = "http://localhost/Mariachis/public/filtroClientes";

    $.ajax({
                data:  parametros,
                url: ruta,
                type:  'get',
                beforeSend: function ()
                {
                    $("#buscarDato").html("Procesando, espere por favor...");
                },
                success:  function (data)
                {
                    $("#buscarDato").html(data);
                }
                
            });
}


function enviarFormulario(nombreBuscado,idBuscado)
{   
    var nombreCliente = document.getElementById("nombreCliente");
    var idCliente = document.getElementById("idCliente");

    nombreCliente.value = nombreBuscado;
    idCliente.value = idBuscado;
}