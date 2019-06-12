//<![CDATA[ 
$(document).ready(function () {
    $("#oscuridad").css("height", $(document).height()).hide();
    $(".lightSwitcher").click(function () {
        $("#oscuridad").toggle();
        if ($("#oscuridad").is(":hidden"))
            $(this).html("<b>Modo oscuro</b>").removeClass("turnedOff");
        else
            $(this).html("<b>Modo claro</b>").addClass("turnedOff");
    });
});
//]]>