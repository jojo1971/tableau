$(document).ready(function () {

    chargerTab();

});
function chargerTab(rep){
    $.get('charger.php', function(rep){
        $('#ppm1').html(rep);
    });
}