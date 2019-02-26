/*global $*/
import { addScriptsJs } from './zapateria_lib.js';

(function(){
    console.info('hola');
    let url = "twigtemplates/tienda/js/scriptCreated/ajax_products/";
    let javascripts = [
        "zapatos.js"
    ];
    
    addScriptsJs(url,javascripts);

})();

// import { cuadrado, hipotenusa } from './libreria.js';
// (function() {
//     var variablaPrivada='hola';
//     console.log(cuadrado(11)); // 121 
//     console.log(hipotenusa(4, 3)); //5
// }());

