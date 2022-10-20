$("ul[data-aria-tab$='true']").find("li").map(function () { /*Tabs*/
if ($(this).attr("tab-active") == "true") {
    $(this).addClass("active-tab");
    let contendor = $(this).attr("data-tab-content");
    $("#" + contendor).removeClass("hidden");
}
$(this).on("click", function () {
    $(this).addClass("active-tab").siblings().removeClass("active-tab");
    let tab = $(this).attr("data-tab-content");
    $("#" + tab)
        .removeClass("hidden")
        .siblings()
        .addClass("hidden");
});
if ($(this).attr("data-tab-dropdown") == "") {
    let btnTogglet = $(this).find(
        "*[data-dropdown-toggle]"
    ); /*get element dropdown*/
    let documentWriter =
        btnTogglet.data("tab-write"); /*get element write html*/
    let contentTogglet =
        btnTogglet.data("dropdown-toggle"); /*container dropdown*/
    btnTogglet = btnTogglet.attr("id"); /*button dropdown id*/

    $("#" + contentTogglet)
        .find("li")
        .map(function () {
            $(this).on("click", function () {
                $("#" + documentWriter).html($(this).html());
                $(this)
                    .addClass("hidden")
                    .siblings()
                    .removeClass("hidden");

                $("#" + documentWriter)
                    .addClass("active-tab")
                    .siblings()
                    .removeClass("active-tab");
                let tab = $(this).attr("data-tab-content");
                $("#" + tab)
                    .removeClass("hidden")
                    .siblings()
                    .addClass("hidden");

                const dropdown = new Dropdown(
                    document.getElementById(contentTogglet),
                    document.getElementById(btnTogglet)
                );
                dropdown.hide();
            });
        });
    }
});
