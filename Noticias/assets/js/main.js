function validar() {
    var nombre, apellido, correo, password, telefono;
    nombre = document.getElementById("first_name");
    apellido = document.getElementById("last_name");
    correo = document.getElementById("email");
    password = document.getElementById("password");
    telefono = document.getElementById("phone");

    var noEncontrado = "";

    if (nombre.value == "") {
        noEncontrado = "nombre";
        nombre.focus();
        nombre.style.background = "yellow";
    } else if (apellido.value == "") {
        noEncontrado = "apellido";
        apellido.focus();
        apellido.style.background = "yellow";
    } else if (correo.value == "") {
        noEncontrado = "correo";
        correo.focus();
        correo.style.background = "yellow";
    } else if (password.value == "") {
        noEncontrado = "contrasenia";
        password.focus();
        password.style.background = "yellow";
    } else if (telefono.value == "") {
        noEncontrado = "telefono";
        telefono.focus();
        telefono.style.background = "yellow";
    } else if (isNaN(telefono.value)) {
        noEncontrado = "numero correctamente"
        telefono.focus();
        telefono.style.background = "yellow";
    } else if (nombre.value.length > 40) {
        alert("Solo puedes poner 40 caracteres!");
        return false;
    } else if (password.value.length < 8 || password.value.length > 15) {
        alert("La contrasenia debe de ser mayor a 8 caracteres y menor que 15");
        return false;
    } else if (telefono.value.length != 10) {
        alert("El numero telefonico no es correcto")
        return false;
    }

    if (noEncontrado != "") {
        alert(`Introduce tu ${noEncontrado}`);
        return false;
    }

    return true;
}