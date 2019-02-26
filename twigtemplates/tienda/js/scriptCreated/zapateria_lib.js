/*global $*/
var lib = (function(){
    function genericAjax(url, data, type, callBack) {
        $.ajax({
            url: url,
            data: data,
            type: type,
            dataType : 'json',
        })
        .done(function( json ) {
            console.log('ajax done');
            console.log(json);
            callBack(json);
        })
        .fail(function( xhr, status, errorThrown ) {
            console.log('ajax fail');
        })
        .always(function( xhr, status ) {
            console.log('ajax always');
        });
    }
    
    function addScriptsJs(url,javascripts){
        console.info('adios');
        let head = document.getElementsByTagName("head");
        for(let javascript of javascripts){
            $("head").append($("<script/>",{"src":url+javascript,"defer":"defer","type":"module"}));
        }
    }

    return {
        addScriptsJs:addScriptsJs,
        genericAjax:genericAjax
    }
})();

let genericAjax = lib.genericAjax;
let addScriptsJs = lib.addScriptsJs;
export { genericAjax, addScriptsJs };