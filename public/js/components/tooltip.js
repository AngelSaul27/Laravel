$("*[data-tooltip-target]").hover(function () {/* Function for tooltip component*/
const tooltipId =$(this).data("tooltip-target"); /*get id of tooltip*/
if ($(this).attr("data-tooltip-message")) {
    const tooltipMsg =$(this).data("tooltip-message"); /*get tooltip message*/
    $("#" + tooltipId).append('<span id="tooltip-msg">' + tooltipMsg + "</span>"); /*add tooltip message*/
}
},function () { $("#tooltip-msg").remove(); });
