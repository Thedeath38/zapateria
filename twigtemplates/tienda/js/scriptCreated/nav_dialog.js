(function(){
    let btn = document.getElementById("trigger-overlay");
    let dialog = document.getElementsByClassName("dialog_user");
    
    btn.addEventListener("mouseenter",function(){
        dialog[0].classList.toggle("dialog_user_hidden");
    });
    
    dialog[0].addEventListener("mouseout",function(){
        if(dialog[0].classList.contains("dialog_user_hidden")){
            dialog[0].classList.toggle("dialog_user_hidden");
        }
    });
}())
