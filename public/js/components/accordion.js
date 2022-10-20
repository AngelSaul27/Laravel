$("*[data-accordion-reference]").on("click", function () { /*Simple Accordion*/
$("#" + $(this).data("accordion-reference")).toggleClass("hidden");
});

