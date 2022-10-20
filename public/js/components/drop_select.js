$("span[data-drop-select]").click(function () {/*Adf event for components*/
    const buttton = $(this);
    let dropdown = document.getElementById($(this).data('dropdown-toggle')), btnTogglet = document.getElementById($(this).attr("id"));
    $(('#'+$(this).data("dropdown-toggle"))).find('a[data-value]').map( function (){
        $(this).attr("aria-selected") == "true" ? $(buttton).html($(this).html()) : $(this).removeClass("hidden");
        $(this).on("click", function () {
            $(this).parent().find('input').val($(this).data("value"));
            $(buttton).html($(this).html());
            $(this).attr("aria-selected", "true").siblings().attr("aria-selected", "false");
            $(this).addClass("hidden").siblings().removeClass("hidden");
            let dropdowns = new Dropdown(dropdown, btnTogglet);
            dropdowns.hide();
        });
    });
});
/*Update at startup */
$("span[data-drop-select]").map(function () {
    const buttton = $(this);
    $(('#'+$(this).data("dropdown-toggle"))).find('a[data-value]').map( function (){
        if($(this).attr("aria-selected") == "true"){
            $(buttton).html($(this).html());
            $(this).addClass('hidden')
        }
    });
    const placeholder = $(this).data("drop-select");
    $(this).html(($(this).html())+"<span>"+placeholder+"</span>");
});

function update_Select(){
    $("span[data-drop-select]").map(function () {
        const buttton = $(this);
        $("#" + $(this).data("dropdown-toggle"))
            .find("a[data-value]").map(function () {
                if ($(this).attr("aria-selected") == "true") {
                    $(buttton).html($(this).html());
                    $(this).addClass("hidden");
                }
            }
        );
    });
}
function clear_Select(){
    $("span[data-drop-select]").map(function () {
        const buttton = $(this).attr("data-dropdown-toggle");
        $('#'+buttton).find('[aria-selected]').map( function (){
            $(this).removeAttr("aria-selected");
        });
        const placeholder = $(this).data("drop-select");
        $(this).find('span').html(placeholder);
    });
}

