$("#frmRegistroprs").on('submit', function (e) {
    e.preventDefault();
    txtnombre   = $("#inpNombre").val();
    txtapellido = $("#inpApellido").val();
    txtcurso = $("#inpCurso").val();
    txtci  = $("#inpci").val();
    txtdireccion = $("#inpdireccion").val();
    txttelefo  = $("#inptelefono").val();
    txtcorreo = $("#inpcorreo").val();
    txtusuario  = $("#inpUsuario").val();
    txtcontr = $("#inpContrase").val();
    // Agrega mensajes de consola para verificar el contenido del array
    console.log("txtnombre:",txtnombre );
    console.log("txtapellido:", txtapellido);
    console.log("txtcurso:", txtcurso);
    console.log("txtci:", txtci);
    console.log("txtdireccion:",txtdireccion );
    console.log("txttelefo:", txttelefo);
    console.log("txtcorreo:",txtcorreo );
    console.log("txtusuario:", txtusuario);
    console.log("txtcontr:",txtcontr );

    $.post("../controller/registropr.php?op=registro",
        { 
          "inpNombre": txtnombre,
          "inpApellido": txtapellido,
          "inpCurso": txtcurso,
          "inpci": txtci,
          "inpdireccion": txtdireccion,
          "inptelefono": txttelefo,
          "inpcorreo": txtcorreo,
          "inpUsuario": txtusuario,
          "inpContrase": txtcontr
        },
        function (data) {
            console.log("Respuesta del servidor:", data);

            if (data == 2) {
                Swal.fire("Mensaje de Error", "Credenciales Incorrectas", "error");
            } else {
                Swal.fire("Mensaje", "Usuario registrado correctamente", "success").then(function(){$(location).attr("href", "login.html");});
            }
        });
});