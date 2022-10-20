$("*[data-close-modal]").click(function () { /*Basic Cloase Modal*/
const btnClose = "#"+$(this).attr("data-close-modal");
    $(btnClose+"-target").slideUp(function () {
        $(btnClose).removeClass("flex");
        $(btnClose).addClass("hidden");
        $("body").removeClass("overflow-hidden");
    });
});
$("*[data-open-modal]").click(function () {/*Basic Open Modal*/
    if ($(this).is("[data-modal-content]")) {
        $("#" + $(this).attr("data-modal-content")).removeClass("hidden").siblings().addClass("hidden");
    }
    $("#"+$(this).attr("data-open-modal")).removeClass("hidden");
    $("#"+$(this).attr("data-open-modal")).addClass("flex");
    $("body").addClass("overflow-hidden");
    $("#"+$(this).attr("data-open-modal") + "-target").slideDown();
});
