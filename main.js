document.addEventListener('DOMContentLoaded',iniciar);




function validarTextoEntrada(input, patron) {
    var texto = input.value

    var letras = texto.split("")

    for (var x in letras) {
        var letra = letras[x]

        if (!(new RegExp(patron, "i")).test(letra)) {
            letras[x] = ""
        }
    }

    input.value = letras.join("")
}

var txtSoloNumeros = document.getElementsByClassName("soloNum")
txtSoloNumeros.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[0-9]")
})

var txtSoloLetras = document.getElementsByClassName("soloText")
txtSoloLetras.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})

var txtPersonalizado = document.getElementsByClassName("textNum")
txtPersonalizado.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[0-9a-z]")
})


function iniciar()
{
    var txtCurp=document.querySelectorAll('.mayusc');

    txtCurp.forEach(ele=>ele.addEventListener('input', function (event) {
        this.value = this.value.toUpperCase();
    }));
}

var txtCurp=document.querySelector('.mayusc');
txtCurp.addEventListener('input', function (event) {
    this.value = this.value.toUpperCase()});

var txtUsuario = document.getElementsByClassName("txtUsuario")
txtUsuario.addEventListener("input", function (event) {
    this.value = this.value.toLowerCase()
})
