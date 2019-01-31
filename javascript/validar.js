(function(){
    
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
    
    function validarContraseñasLogin(nodo1, nodo2){
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
    
})();