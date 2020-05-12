$("input[name='physical_activity']").change(function(){
    $("#physical_hidden").toggle();
});

$("input[name='fruits_veges']").change(function(){
    $("#servings_hidden").toggle();
});