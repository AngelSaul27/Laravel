$('span[data-picker-btn]').on('click', function() {
    const button = $(this);
    let dropdown = document.getElementById($(this).data('dropdown-toggle')), btnTogglet = document.getElementById($(this).attr("id"));
    $(("#"+$(this).data('dropdown-toggle'))).find("span[picker-colors]").map(function () {
        $(this).on('click', function() {
            $($(this).parent().find('input')).val($(this).attr('picker-colors'));
            $($(this).parent().find('input')).trigger('change');
            $(this).addClass('pickers-colors-selected').siblings().removeClass('pickers-colors-selected');
            $(this).attr("picker-selected", "true").siblings().attr("picker-selected", "false");
            $(button).css("color", $(this).attr('picker-colors'));
            let dropdowns = new Dropdown(dropdown, btnTogglet);
            dropdowns.hide();
        });

    });
});
$('span[data-picker-btn]').map(function () {
    const button = $(this);
    $(("#"+$(this).data('dropdown-toggle'))).find("span[picker-colors]").map(function () {
        if($(this).attr("picker-selected") == "true"){
            $(button).css("color", $(this).attr("picker-colors"));
            $(this).addClass('pickers-colors-selected');
        }
    });
    const placeholder = $(this).data("picker-btn");
    $(this).html(($(this).html())+"<span>"+placeholder+"</span>");
});
function update_Picker_color(){
    $("span[data-picker-btn]").map(function () {
        const button = $(this);
        $("#" + $(this).data("dropdown-toggle"))
            .find("span[picker-colors]").map(function () {
                if ($(this).attr("picker-selected") == "true") {
                    $(button).css("color", $(this).attr("picker-colors"));
                    $(this).addClass("pickers-colors-selected");
                }
            });
    });
}
function clear_Picker_color(){
    $("span[data-picker-btn]").map(function () {
        const button = $(this).attr('data-dropdown-toggle');
        $('#'+button).find('span[picker-selected]').map( function (){
            $(this).removeAttr("picker-selected");
        });
        const placeholder = $(this).data("picker-btn");
        $(this).find('span').html(placeholder);
        $(this).removeAttr("style");
    });
}
