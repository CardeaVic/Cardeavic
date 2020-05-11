$("input[name='physical_activity']").change(function(){
    var x = document.getElementById("physical_hidden");
    if (x.className.indexOf("w3-show") == -1){
        x.className += " w3-show";
    }else
        x.className = x.className.replace(" w3-show", "");
});

$("input[name='fruit_vege']").change(function(){
    var x = document.getElementById("servings_hidden");
    if (x.className.indexOf("w3-show") == -1){
        x.className += " w3-show";
    }else
        x.className = x.className.replace(" w3-show", "");
});