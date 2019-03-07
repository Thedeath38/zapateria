/*global $*/
import { genericAjax } from '../zapateria_lib.js';

(function(){
    ajax();
    function ajax(){
        removeAllProduct();
        let params = parametrosManager(window.location.href);
        console.info(params);
        genericAjax('ajax/getZapatos'+params, {}, 'get', function(json) {
            for(let zapato of json.zapatos){
                createProductMain('#productos',zapato);
            }
            $('#productos').append(
                $("<div/>",{"class":"clearfix"})
            );
            filterManager(decodeURI(window.location.href));
        });
        
        
        genericAjax('ajax/getCategorias', {}, 'get', function(json) {
            for(let categoria of json.categorias){
                addCategorias('#list_categorias',categoria);
            }
            $(document).on('change', '#list_categorias li label input',function(e){
                urlFilter(e);
            });
            filterManager(decodeURI(window.location.href));
        });
        
        genericAjax('ajax/getColores', {}, 'get', function(json) {
            for(let color of json.colores){
                addColor('#list_colores',color);
            }
            $(document).on('change', '#list_colores li label input',function(e){
                urlFilter(e);
            });
            filterManager(decodeURI(window.location.href));
        });
        
        genericAjax('ajax/getMarcas', {}, 'get', function(json) {
            for(let marca of json.marcas){
                addColor('#list_marcas',marca);
            }
            $(document).on('change', '#list_marcas li label input',function(e){
                urlFilter(e);
            });
            filterManager(decodeURI(window.location.href));
        });
        
        genericAjax('ajax/getMateriales', {}, 'get', function(json) {
            for(let material of json.materiales){
                addColor('#list_materiales',material);
            }
            $(document).on('change', '#list_materiales li label input',function(e){
                urlFilter(e);
            });
            filterManager(decodeURI(window.location.href));
        });
        
        genericAjax('ajax/getNumeros', {}, 'get', function(json) {
            createNumbers('#list_numeros',json.numerodesdehasta[1],json.numerodesdehasta[2]);
            $(document).on('click', '#list_numeros button',function(e){
                urlFilter(e);
            });
            filterManager(decodeURI(window.location.href));
        });
    }
    
    /*return object*/
    function parametrosManager(string){
        string = string.split("?");
        
        if(string.length > 1){
            string = string[1];
            return "?"+string;
        }
        return "";
    }
    
    function filterManager(string,nombre){
        string = string.split("?");
        if(string.length > 1){
            console.info(string.length);
            string = string[1];
            let filtros = string.split("&");
            for(let filtro of filtros){
                let splitFilter = filtro.split("=");
                switch (splitFilter[0]) {
                    case 'categorias':
                        $('#list_categorias li label').each(function(){
                            for(let prop of splitFilter[1].split("-")){
                                if($(this).text().trim() === prop){
                                    $(this).children().prop('checked', true);
                                }
                            }
                        });
                        break;
                    case 'marcas':
                        $('#list_marcas li label').each(function(){
                            for(let prop of splitFilter[1].split("-")){
                                if($(this).text().trim() === prop){
                                    $(this).children().prop('checked', true);
                                }
                            }
                        });
                        break;
                    case 'colores':
                        $('#list_colores li label').each(function(){
                            for(let prop of splitFilter[1].split("-")){
                                if($(this).text().trim() === prop){
                                    $(this).children().prop('checked', true);
                                }
                            }
                        });
                        break;
                    case 'numeros':
                        $('#list_numeros button').each(function(){
                            for(let prop of splitFilter[1].split("-")){
                                if($(this).text().trim() === prop){
                                    $(this).addClass('active', 'active');
                                }
                            }
                        });
                        break;
                    case 'materiales':
                        $('#list_materiales li label').each(function(){
                            for(let prop of splitFilter[1].split("-")){
                                if($(this).text().trim() === prop){
                                    console.info($(this).children());
                                    $(this).children().prop('checked', true);
                                }
                            }
                        });
                        break;
                }
            }
        }
    }
    
    function createProductMain(selectorPadre,json){
        $('#productos').append(
            $('<div/>',{
                "class":"col-md-4 product-men"
            }).append(
                $('<div/>',{
                    "class":"product-shoe-info shoe"
                }).append(
                    $('<div/>',{
                        "class":"men-pro-item"
                    }).append(
                        $('<div/>',{
                            "class":"men-thumb-item"
                        }).append(
                            $('<img/>',{
                                "src":json.imagenes[0]
                            })
                        ).append(
                            $('<div/>',{
                                "class":"men-cart-pro"
                            }).append(
                                $('<div/>',{
                                    "class":"inner-men-cart-pro"
                                }).append(
                                   $('<a/>',{
                                        "href":"https://zapateria-thedeath38.c9users.io/zapato?id="+json.id,
                                        "class":"link-product-add-cart",
                                        "text":"Quick View"
                                    }) 
                                )
                            )
                        ).append(
                            $('<span/>',{
                                "class":"product-new-top",
                                "text":"New"
                            })
                        )
                    ).append(
                        $('<div/>',{
                            "class":"item-info-product"
                        }).append(
                            $('<h4/>').append(
                                $('<a/>',{
                                   "href":"https://zapateria-thedeath38.c9users.io/zapato?id="+json.id,
                                    "text":json.modelo
                                })   
                            )
                        ).append(
                            $('<div/>',{
                                "class":"info-product-price"
                            }).append(
                                $('<div/>',{
                                    "class":"grid_meta"
                                }).append(
                                    $('<div/>',{
                                        "class":"product_price"
                                    }).append(
                                        $('<span/>',{
                                            "class":"money",
                                            "text":json.precio+"€"
                                        })
                                    )
                                )
                            ).append(
                                $('<div/>',{
                                    "class":"shoe single-item hvr-outline-out"
                                }).append(
                                    $('<button/>',{
                                        "class":"shoe-cart pshoe-cart",
                                        "type":"submit"
                                    }).append(
                                        $('<i/>',{
                                            "class":"fa fa-cart-plus",
                                            "aria-hidden":"true"
                                        })
                                    )
                                )
                            )
                        ).append(
                            $('<div/>',{
                                "class":"clearfix"
                            })
                        )
                    )
                )
            )
        )
    }
    
    function removeAllProduct(){
        $('#productos').empty();
        $('#list_numeros').empty();
        $('#list_categorias').empty();
        $('#list_colores').empty();
        $('#list_marcas').empty();
        $('#list_materiales').empty();
    }
    
    function addCategorias(selectorPadre,json){
        $(selectorPadre).append(
            $('<li/>').append(
                $('<label/>',{style:"font-weight: normal; !important"}).append(
                    $('<input/>',{
                        "type":"checkbox",
                        "value":json.nombre
                    })
                ).append("  " + json.nombre)
            )
        )
    }
    
    function addColor(selectorPadre,json){
        $(selectorPadre).append(
            $('<li/>').append(
                $('<label/>',{style:"font-weight: normal; !important"}).append(
                    $('<input/>',{
                        "type":"checkbox",
                        "value":json[1]
                    })
                ).append("  " + json[1])
            )
        )
    }
    
    function createNumbers(selectorPadre,desde,hasta){
        for(let i=desde;i<=hasta;i++){
            $(selectorPadre).append(
                $('<button/>',{
                    "type":"button",
                    "class":"btn btn-outline-secondary",
                    "style":"margin-right:1px;margin-bottom:1px;",
                    "data-toggle":"button",
                    "aria-pressed":"false",
                    "text":i
                })
            );
        }
    }
    
    function urlFilter(e){
        let filter = "?";
        
        let categorias = [];
        $("#list_categorias li").each(function(){
            if($(this).children().children().is(":checked")){
                categorias.push($(this).children().text().trim());
            }
        });
        
        let marcas = [];
        $("#list_marcas li").each(function(){
            if($(this).children().children().is(":checked")){
                marcas.push($(this).children().text().trim());
            }
        });
        
        let colores = [];
        $("#list_colores li").each(function(){
            if($(this).children().children().is(":checked")){
                colores.push($(this).children().text().trim());
            }
        });
        
        
        
        let numeros = [];
        $("#list_numeros button").each(function(){
            if($(this).hasClass("active")){
                numeros.push($(this).text());
            }
        });
        
        let materiales = [];
        $("#list_materiales li").each(function(){
            if($(this).children().children().is(":checked")){
                materiales.push($(this).children().text().trim());
            }
        });
        
        if(categorias.length !== 0){
            createStringFilter(categorias,"categorias");
        }
        
        if(marcas.length !== 0){
            createStringFilter(marcas,"marcas");
        }
        
        if(colores.length !== 0){
            createStringFilter(colores,"colores");
        }
        
        if(numeros.length !== 0){
            createStringFilter(numeros,"numeros");
        }
        
        if(materiales.length !== 0){
            createStringFilter(materiales,"materiales");
        }
        
        function createStringFilter(array,nombre){
            let tempfilter = nombre+"=";
            for(let parametro of array){
                tempfilter += parametro+"-";
            }
            tempfilter = tempfilter.substring(0, tempfilter.length - 1);
            tempfilter += "&";
            filter += tempfilter;
        }
        filter = filter.substring(0, filter.length - 1);
        window.history.pushState(null,"",filter);
        ajax();
        e.stopImmediatePropagation();
    }
    // window.history.pushState(null,"","?hola=hola");
    // console.info(window.location.href);
    //window.history.go();
    
    //https://cybmeta.com/cookies-en-javascript
    //http://php.net/manual/es/reserved.variables.cookies.php
    //document.cookie = "filtro=hola;apellidos=hola";
})();