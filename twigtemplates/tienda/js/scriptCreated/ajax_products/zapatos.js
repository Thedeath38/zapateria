/*global $*/
import { genericAjax } from '../zapateria_lib.js';

(function(){
    function createProductMain(selectorPadre,json){
        $('#productos').children().last().prev().after(
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
                                        "href":"#",
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
                                   "href":"#",
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
        );
        console.info($('#productos').children().last().prev());
    }
    
    genericAjax('ajax/getZapatos', {}, 'get', function(json) {
        console.info(json.zapatos[3]);
        createProductMain('#productos',json.zapatos[3]);
    });
})();