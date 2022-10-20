<div class="fixed md:px-0 px-4 py-10 flex items-center justify-center inset-0 z-40 bg-black/50" id="modal_deleted" style="display: none">
    <div id="modal_deleted-target" class="relative max-w-[860px] w-max h-max bg-slate-100 dark:bg-slate-700 p-3 py-2 rounded-md overflow-hidden text-slate-600 dark:text-slate-300" style="display: none">
        <form action="app/task/destroy" method="post" id="id_form_task_deleted">
            @csrf
            {{method_field('DELETE')}}
            <div class="m-5 mx-2 mb-2">
                <h1 class="text-center font-bold text-md mb-2">Delete This Task</h1>
                <p class="text-center text-gray-500 dark:text-gray-400">Are you sure you want to delete this task?</p>
            </div>
            <div class="flex gap-2 w-full sm:min-w-[300px] justify-end items-center">
               <x-site.url model="default" class="cursor-pointer bg-red-500 rounded-md shadow-lg text-white py-2 px-3" onclick="close_modal('#modal_deleted');">Cancel</x-site.url>
               <x-site.button fill="none" id="id_form_submit_deleted" type="sumbit" model="default" class="cursor-pointer bg-green-500 rounded-md shadow-lg text-white py-2 px-3 max-w-max" value="Delete Activity"/>
            </div>
        </form>
    </div>
</div>
