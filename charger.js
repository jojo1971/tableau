$(document).ready(function () {

    chargerTab();

});
function chargerTab(rep){
    $.get('index.php', function(rep){
        $('#ppm1').html(rep);
    });
}