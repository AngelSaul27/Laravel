const id_form = document.getElementById('id_form_task'), id_form_deleted = document.getElementById('id_form_task_deleted');
const id_form_submit = document.getElementById('id_form_submit'), id_form_submit_deleted = document.getElementById('id_form_submit_deleted');
flatpickr(".flatpickr", { wrap: true, mode: "range", minDate: "today", dateFormat: "d-m-Y", });

function createTask(){
    open_modal('#modal_form_task');/*Open modal*/
    $(id_form).find('input[name="_method"]').remove();
    resetform();/*Clear Inputs*/
    $(id_form_submit).text('Create Activity');/*Change button text*/
    var action = getAction('create'); $(id_form).attr('action', action);

    $(id_form).one("submit", function(e){
        e.preventDefault();
        $.ajax({
            url: action,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $(this).serialize(),
            datatype: 'json',
            beforeSend: function(){
                $(id_form_submit).html('<img class="mx-auto block my-[2px]" src="'+window.location.origin+'/gif/spinner.gif" alt="loading" width="35px">');
                $(id_form_submit).attr('disabled', true);
            },
            success: function(data){
                var alert ='<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-green-500 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-green-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">'+'<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div>'+'<div class="flex flex-col"><ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light '+'text-[18px] p-0  text-gray-600">' +data[1]+ "</li></ul></div></div>";
                $("#modal_form_task").prepend(alert);
                $('#task_layout_1').html(data[0].layout_1);
                $('#task_layout_2').html(data[0].layout_2);
                $('#task_layout_3').html(data[0].layout_3);
                $('#id_board_render').html(data[0].board_render);
            },
            error: function(data){
                try {
                    var json = Object.entries(data.responseJSON[0]), message = "";
                    for (let i = 0; i < json.length; i++) {
                        message = message + (json[i][1][0] + "<br>");
                    }
                    var alert = '<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md '+'w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" '+'class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" '+'stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" '+'d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col">'+'<ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0 '+'text-gray-600">'+ message +"</li></ul></div></div>";
                    $("#modal_form_task").prepend(alert);
                } catch (error) {
                    var alert = '<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path '+'stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />'+'</svg></div></div><div class="flex flex-col"><ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1">'+'<li class="font-light text-[18px] p-0  text-gray-600">Error server not responding, please try again later...</li></ul></div></div>';
                    $("#modal_form_task").prepend(alert);
                }
            },
            complete: function(){
                setTimeout(function(){
                    $(id_form_submit).text('Create Activity');
                    $(id_form_submit).attr('disabled', false);
                    close_modal('#modal_form_task');
                }, 1000);
            }
        });
    })
}

function deleteTask(id){
    open_modal('#modal_deleted');
    var action = getAction('destroy/'+id);
    $(id_form_deleted).attr('action', action);

    $(id_form_deleted).one('submit', function (e){
        e.preventDefault();
        $.ajax({
            url: action,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $(this).serialize(),
            datatype: 'json',
            beforeSend: function(){
                $(id_form_submit_deleted).html('<img class="mx-auto block my-[2px]" src="'+window.location.origin+'/gif/spinner.gif" alt="loading" width="35px">');
                $(id_form_submit_deleted).attr('disabled', true);
            },
            success: function(data){
                var alert ='<div  id="dinamycMessage" class="fixed z-50 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-green-500 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-green-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">'+'<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div>'+'<div class="flex flex-col"><ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light '+'text-[18px] p-0  text-gray-600">' +data[1]+ "</li></ul></div></div>";
                $("body").prepend(alert);
                $('#task_layout_1').html(data[0].layout_1);
                $('#task_layout_2').html(data[0].layout_2);
                $('#task_layout_3').html(data[0].layout_3);
                $('#id_board_render').html(data[0].board_render);
            },
            error: function(data){
                try {
                    var json = Object.entries(data.responseJSON[0]), message = "";
                    for (let i = 0; i < json.length; i++) {
                        message = message + (json[i][1][0] + "<br>");
                    }
                    var alert = '<div  id="dinamycMessage" class="fixed z-50 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md '+'w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" '+'class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" '+'d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col">'+'<ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0 '+'text-gray-600">'+ message +"</li></ul></div></div>";
                    $("body").prepend(alert);
                } catch (error) {
                    var alert = '<div  id="dinamycMessage" class="fixed z-50 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col">'+'<ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0 text-gray-600">Error server not responding, please try again later...</li></ul></div></div>';
                    $("body").prepend(alert);
                }
            },
            complete: function(){
                setTimeout(function(){
                    close_modal('#modal_deleted');
                    $(id_form_submit_deleted).text('Delete Activity');
                    $(id_form_submit_deleted).attr('disabled', false);
                }, 1000);
            }
        });
    });
}

function editTask(id){
    resetform();
    var action = getAction('edit/'+id);
    $(id_form).append('<input type="hidden" name="_method" value="PATCH">');
    $(id_form).off();
    $(id_form_submit).text('Update Activity');
    $.ajax({
        url: action,
        type: 'POST',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: $(this).serialize(),
        datatype: 'json',
        success: function(data){
            action = getAction('update/'+id);
            $(id_form).attr('action', action);
            setPropiety(data[1]);
            update_Select();
            update_Picker_color();
            open_modal('#modal_form_task');
            updateTask(action);
        },
        error: function(data){
            try {
                var json = Object.entries(data.responseJSON[0]), message = "";
                for (let i = 0; i < json.length; i++) {
                    message = message + (json[i][1][0] + "<br>");
                }
                var alert = '<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md '+'w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" '+'class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" '+'stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" '+'d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col">'+'<ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0 '+'text-gray-600">'+ message +"</li></ul></div></div>";
                $("#modal_form_task").prepend(alert);
            }catch (error) {
                var alert = '<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path '+'stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />'+'</svg></div></div><div class="flex flex-col"><ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1">'+'<li class="font-light text-[18px] p-0  text-gray-600">Error server not responding, please try again later...</li></ul></div></div>';
                $("#modal_form_task").prepend(alert);
            }
        }
    });
}

function updateTask(action){
    $(id_form).one('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: action,
            type: 'POST',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: $(this).serialize(),
            datatype: 'json',
            beforeSend: function(){
                $(id_form_submit).html('<img class="mx-auto block my-[2px]" src="'+window.location.origin+'/gif/spinner.gif" alt="loading" width="35px">');
                $(id_form_submit).attr('disabled', true);
            },
            success: function(data){
                var alert ='<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-green-500 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-green-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">'+'<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div>'+'<div class="flex flex-col"><ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light '+'text-[18px] p-0  text-gray-600">' +data[1]+ "</li></ul></div></div>";
                $("#modal_form_task").prepend(alert);
                $('#task_layout_1').html(data[0].layout_1);
                $('#task_layout_2').html(data[0].layout_2);
                $('#task_layout_3').html(data[0].layout_3);
                $('#id_board_render').html(data[0].board_render);
            },
            error: function(data){
                try {
                    var json = Object.entries(data.responseJSON[0]), message = "";
                    for (let i = 0; i < json.length; i++) {
                        message = message + (json[i][1][0] + "<br>");
                    }
                    var alert = '<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md '+'w-[50px]"><div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" '+'class="h-6 w-6 text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" '+'stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" '+'d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div></div><div class="flex flex-col">'+'<ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1"><li class="font-light text-[18px] p-0 '+'text-gray-600">'+ message +"</li></ul></div></div>";
                    $("#modal_form_task").prepend(alert);
                } catch (error) {
                    var alert = '<div  id="dinamycMessage" class="absolute z-20 md:right-2 top-2 flex rounded-md bg-white w-full sm:w-max shadow-lg '+'dark:shadow-slate-700 shadow-gray-300"><div class="flex items-center justify-center bg-red-600/80 rounded-l-md w-[50px]">'+'<div class="bg-white w-[17px] h-[17px] relative rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 '+'text-red-400 absolute -left-[3px] -top-[3px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path '+'stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />'+'</svg></div></div><div class="flex flex-col"><ul class="ml-[12px] mr-[10px] md:max-w-[400px] max-w-[300px] py-2 px-1">'+'<li class="font-light text-[18px] p-0  text-gray-600">Error server not responding, please try again later...</li></ul></div></div>';
                    $("#modal_form_task").prepend(alert);
                }
            },
            complete: function(){
                setTimeout(function(){
                    $(id_form_submit).text('Create Activity');
                    $(id_form_submit).attr('disabled', false);
                    close_modal('#modal_form_task');
                }, 1000);
            }
        });
    });
}

function resetform(){
    id_form.reset();
    $("#btn_dropdown_type").html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" class="h-5 w-5 mr-2 min-w-max max-w-max"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg><span>Select Status</span>');
    $("#btn_dropdown_status").html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" class="h-5 w-5 mr-2 min-w-max max-w-max"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg><span>Select Type</span>');
    $("#btn_dropdown_priority").html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" class="h-5 w-5 mr-2 min-w-max max-w-max"><path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg><span>Select Priority</span>');
    clear_Select();
    clear_Picker_color();
}

function open_modal(id){
    $(id).removeAttr('style');
    $(id+'-target').slideDown();
    $('body').addClass('overflow-hidden');
}

function close_modal(id){
    $(id+'-target').slideUp(function (){
        $(id).attr('style', 'display:none');
        $('body').removeClass('overflow-hidden');
    });
}

function formatDates(date) {
    return date.replace(/^(\d{4})-(\d{2})-(\d{2})$/g, "$3-$2-$1");
}

function getAction(id){
    var get_action = id_form.getAttribute('action');/*get action*/
    var action = get_action.substring(0, get_action.lastIndexOf('task/')+5)+id;/*Subtract and complement*/
    return action;
}

function setPropiety(data) {
    $(id_form).find('input[name="name"]').val(data.name);
    $(id_form).find('textarea[name="description"]').val(data.description);
    $(id_form).find('input[name="date_extends"]').val(formatDates(data.start_date) + " to " + formatDates(data.due_date));
    $("#select-type").find('a[data-value="' + data.type + '"]').attr("aria-selected", true);
    $(id_form).find('input[name="type"]').val(data.type);
    $("#select-status").find('a[data-value="' + data.status + '"]').attr("aria-selected", true);
    $(id_form).find('input[name="status"]').val(data.status);
    $("#select-priority").find('a[data-value="' + data.priority + '"]').attr("aria-selected", true);
    $(id_form).find('input[name="priority"]').val(data.priority);
    $("#select_color_priority").find('span[picker-colors="' + data.color_priority + '"]').attr("picker-selected", true);
    $(id_form).find('input[name="color_priority"]').val(data.color_priority);
    $("#select_color_header").find('span[picker-colors="' + data.color_head + '"]').attr("picker-selected", true);
    $(id_form).find('input[name="color_header"]').val(data.color_head);
}
