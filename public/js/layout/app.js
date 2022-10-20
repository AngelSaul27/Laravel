// Change the icons inside the button based on previous settings
if (localStorage.getItem("color-theme") === "dark" ||(!("color-theme" in localStorage) &&window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    $(".theme-toggle-dark").addClass("hidden");
    $(".theme-toggle-light").removeClass("hidden");
    $('body').append('<link rel="stylesheet" href="/css/flatpickr_dark.css">');
}else{
    $(".theme-toggle-dark").removeClass("hidden");
    $(".theme-toggle-light").addClass("hidden");
}
$(".theme-toggle").click(function () {
    // toggle icons inside button
    $(".theme-toggle-dark").toggleClass("hidden");
    $(".theme-toggle-light").toggleClass("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
            $('body').append('<link rel="stylesheet" href="/css/flatpickr_dark.css">');
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
            $('link[href="/css/flatpickr_dark.css"]').remove();
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});
/* Function hidden mensajeCollapse */
$(document).ready(function () {
    function mensajeCollapse() {
        /*ERROR FOR SERVER*/
        if ($("#errorsSession").length > 0) {
            setTimeout(function () {
                $("#errorsSession").fadeOut(1500);
                setTimeout(function () {
                    $("#errorsSession").remove();
                }, 1700);
            }, 3000);
        }
        /*ERROR FOR RESPONSE JSON*/
        if ($("#dinamycMessage").length > 0) {
            setTimeout(function () {
                $("#dinamycMessage").fadeOut(800);
                setTimeout(function () {
                    $("#dinamycMessage").remove();
                }, 900);
            }, 700);
        }
    }
    setInterval(mensajeCollapse, 500);
});

$(".notification_form_control").on("submit", function (e) {/* Notificactions*/
    e.preventDefault();
    var url = $(this).attr("action");
    $.ajax({
        type: "POST",
        url: url,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            var leng = url.lastIndexOf("/");
            var short = url.substring(leng + 1);
            var targetEl = document.getElementById("NotifiesToggle" + short);
            var targetEl2 = document.getElementById(
                "NotifiesToggle_Btn" + short
            );
            const dropdown = new Dropdown(targetEl, targetEl2);
            dropdown.hide();

            if (data.action == "update") {
                if (data.response == true) {
                    $("#buble_notification").addClass("hidden");
                }
                if (data.status == "success") {
                    var notify =
                        '<div  id="dinamycMessage" class="absolute z-10 flex rounded-md bg-white w-full sm:w-max shadow-lg dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-green-500 rounded-l-md w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col"><ul class="ml-[12px] mr-[10px] sm:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0  text-gray-600">' +
                        data.message +
                        "</li></ul></div></div>";
                    $("main").prepend(notify);
                }
                if (data.status == "danger") {
                    var notify =
                        '<div  id="dinamycMessage" class="absolute z-10 flex rounded-md bg-white w-full sm:w-max shadow-lg dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col"><ul class="ml-[12px] mr-[10px] sm:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0  text-gray-600">' +
                        data.message +
                        "</li></ul></div></div>";
                    $("main").prepend(notify);
                }
            }

            if (data.action == "delete") {
                if (data.response == true) {
                    $("#buble_notification").addClass("hidden");
                    $(".items_notify_" + short).addClass("hidden");
                    var codehtml =
                        '<div class="w-full h-full flex items-center justify-center"><p class="py-3">No found records</p></div>';
                    $(".body_togglet_notify").append(codehtml);
                }
            }
        },
        error: function (error) {
            var notify =
                '<div  id="dinamycMessage" class="absolute z-10 flex rounded-md bg-white w-full sm:w-max shadow-lg dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col"><ul class="ml-[12px] mr-[10px] sm:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0  text-gray-600">' +
                error +
                "</li></ul></div></div>";
            $("main").prepend(notify);
        },
    });
});

function fixed_panel(elementName, className, blockBodyScroll) { /*FixedPanel*/
    $(elementName).toggleClass(className);
    blockBodyScroll ? $('body').toggleClass('overflow-hidden'): '';
}

function scrolltop(elementId) { /*ScrollTop*/
    $("html, body").animate({scrollTop: $(elementId).offset().top }, 500);
}

$('input[data-upload-file="true"]').change(function () { /* Function for upload images: enable button */
    const x = $(this).data("upload-button");
    $("#" + x).removeAttr("disabled");
    $("#" + x).removeClass("bg-green-500/20");
    $("#" + x).addClass("bg-green-500");
});

