$("#frmRegistro").on('submit', function (e) {
    e.preventDefault();
    nombre = $("#txtnombre").val();
    apellido = $("#txtapellido").val();
    ci = $("#ci").val();  // Cambiado de txtci a ci
    direccion = $("#txtdireccion").val();
    telefono = $("#txttelefono").val();
    correo = $("#txtcorreo").val();
    usuario = $("#txtusuario").val();
    contrasena = $("#txtcontrasena").val();

    console.log("txtnombre:", nombre);
    console.log("txtapellido:", apellido);
    console.log("txtci:", ci);
    console.log("txtdireccion:", direccion);
    console.log("txttelefono:", telefono);
    console.log("txtcorreo:", correo);
    console.log("txtusuario:", usuario);
    console.log("txtcontrasena:", contrasena);

    $.post(
        "../controller/registro.php?op=registro",
        {
            "txtnombre": nombre,
            "txtapellido": apellido,
            "txtci": ci,
            "txtdireccion": direccion,
            "txttelefono": telefono,
            "txtcorreo": correo,
            "txtusuario": usuario,
            "txtcontrasena": contrasena
        },
        function (data) {
            if (data == 2) {
                Swal.fire("Falta datos", "error");
                //$(location).attr("href", "home.php");
            } else {
                $(location).attr("href", "escritorio.php");
            }
        }
    );
});
