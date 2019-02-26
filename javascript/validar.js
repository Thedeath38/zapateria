(function(){
    
    var formulario1 = document.getElementById("formulario1");
    formulario1.addEventListener('submit', validarFormulario);
    var usuario1 = document.getElementById("nombreUsuario1");
    usuario1.addEventListener('change', peticionUsuario);
    var email1 = document.getElementById("email1");
    usuario1.addEventListener('change', peticionCorreo);
    
    //EventListener del formulario
    function validarFormulario(e){
        
        var contraseña_1 = document.getElementById("contraseña1");
        var contraseña_2 = document.getElementById("contraseña2");
        var validoEmail = validarEmail(email1);
        var validoContraseña1 = validarContraseña(contraseña_1);
        var validoContraseña2 = validarContraseña(contraseña_2);
        var validoContraseñas = validarContraseñasIguales(contraseña_1, contraseña_2);
        
        if (validoEmail && validoContraseña1 && validoContraseña2 && validoContraseñas) {
            
        }else{
            e.preventDefault();
        }
        
    }
    
    //Funciones sign in
    function validarEmail(nodo){
        var email = nodo.value;
        var valido = false;
        var estructura = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (email.trim == '') {
            nodo.nextElementSibling.textContent = 'Este campo esta vacio';
            return valido;
        }
        if (estructura.test(email)) {
            nodo.nextElementSibling.textContent = '';
            valido = true;
            return valido;
        }else{
            nodo.nextElementSibling.textContent = 'Introduce un email valido';
            return valido;
        }
    }
    
    function validarContraseña(nodo){
        var valido = false;
        var contraseña = nodo.value;
        var mayus = false;
        var minus = false;
        var num = false;
        
        if (contraseña.trim == '') {
            nodo.nextElementSibling.textContent = 'Este campo esta vacio';
            return valido;
        }
        for (var i = 0; i < contraseña.length; i++) {
            if (contraseña.charCodeAt(i) >= 65 || contraseña.charCodeAt(i) <= 90) {
                mayus = true;
            }
            else if (contraseña.charCodeAt(i) >= 48 || contraseña.charCodeAt(i) <= 57) {
                num = true;
            }
            else if (contraseña.charCodeAt(i) >= 97 || contraseña.charCodeAt(i) <= 122) {
                minus = true;
            }else{
                nodo.nextElementSibling.textContent = 'Caracter '+contraseña.charAt(i)+' no válido, la contraseña tiene que ser números y letras en mayúsucla y minúscula'
                return valido;
            }
        }
        if (mayus && minus && num) {
            nodo.nextElementSibling.textContent = '';
            valido = true;
            return valido;
        }else{
            nodo.nextElementSibling.textContent = 'La contraseña no tiene mayúsculas, minúsculas y números';
            return valido;
        }
    }
    
    function validarContraseñasIguales(nodo1, nodo2){
        var contraseña1 = nodo1.value;
        var contraseña2 = nodo2.value;
        var valido = false;
        if (contraseña1 !== contraseña2) {
            nodo1.nextElementSibling.textContent = 'Las contraseñas no coinciden';
            nodo2.nextElementSibling.textContent = 'Las contraseñas no coinciden';
            return valido;
        }
        valido = true;
        nodo1.nextElementSibling.textContent = '';
        nodo2.nextElementSibling.textContent = '';
        return valido;
            
    }
    
    function peticionUsuario(e){
        var user = e.target.value;
        var peticion = new XMLHttpRequest();
        var url = "/ajax/dochecknick?alias="+user;
        peticion.open("GET", url);
        peticion.onload = function(){
            if (peticion.status === 200) {
                if (peticion.reponseText == false) {
                    e.target.nextElementSibling.textContent = "Nombre de usuario no disponible";
                    e.target.nextElementSibling.setAttribute("class", "incorrecto");
                }else{
                    e.target.nextElementSibling.textContent = "Nombre de usuario disponible";
                    e.target.nextElementSibling.setAttribute("class", "correcto");
                }
            };
        };
        peticion.send(null);
    }
    
    function peticionCorreo(e){
        var correo = e.target.value;
        var peticion = new XMLHttpRequest();
        var url = "/ajax/docheckmail?correo="+correo;
        peticion.open("GET", url);
        peticion.onload = function(){
            if (peticion.status === 200) {
                if (peticion.reponseText == false) {
                    e.target.nextElementSibling.textContent = "Correo no disponible";
                    e.target.nextElementSibling.setAttribute("class", "incorrecto");
                }else{
                    e.target.nextElementSibling.textContent = "Correo disponible";
                    e.target.nextElementSibling.setAttribute("class", "correcto");
                }
            };
        };
        peticion.send(null);
    }
    
})();