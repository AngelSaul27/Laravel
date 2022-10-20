<div class="grid grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 my-5">
    <div class="lg:col-auto md:col-auto col-span-full rounded-md bg-blue-300 drop-shadow-2xl text-white">
       <div class="p-3 bg-[length:110px_190px] bg-no-repeat bg-[right_top_0.1rem] rounded-md" style="background-image: url('{{asset('img/ilustraciones/books.png')}}')">
          <p class="font-light text-ms w-max">Total Activity</p>
          <p class="font-bold text-[27px] mb-2 w-max ml-10">{{$counts['Total']}}</p>
          <x-site.url model="default" href="#" class="ml-2 w-max text-sm font-light bg-green-400 px-2.5 py-1.5 rounded-[5px] transition-all duration-500 hover:-translate-y-1" value="View All Tasks" />
       </div>
    </div>
    <div class="lg:col-auto md:col-auto col-span-full rounded-md bg-blue-300 drop-shadow-2xl text-white">
       <div class="p-3 bg-[length:130px_160px] bg-no-repeat bg-[right_top_0.1rem] rounded-md" style="background-image: url('{{asset('img/ilustraciones/writing.png')}}')">
          <p class="font-light text-ms w-max">Total Processing</p>
          <p class="font-bold text-[27px] mb-2 w-max ml-10">{{$counts['Pending']}}</p>
          <x-site.url model="default" href="#" class="ml-2 w-max text-sm font-light bg-green-400 px-2.5 py-1.5 rounded-[5px] transition-all duration-500 hover:-translate-y-1" value="View Processing" />
       </div>
    </div>
    <div class="lg:col-auto col-span-full rounded-md bg-blue-300 drop-shadow-2xl text-white">
       <div class="p-3 bg-[length:140px_150px] bg-no-repeat bg-[right_top_0.1rem] rounded-md" style="background-image: url('{{asset('img/ilustraciones/tacking_photo.png')}}')">
          <p class="font-light text-ms w-max">Total Completed</p>
          <p class="font-bold text-[27px] mb-2 w-max ml-10">{{$counts['Completed']}}</p>
          <x-site.url model="default" href="#" class="ml-2 w-max text-sm font-light bg-green-400 px-2.5 py-1.5 rounded-[5px] transition-all duration-500 hover:-translate-y-1" value="View Completed" />
       </div>
    </div>
</div>
