@if(($model ?? '') == 'enabled')
<li class="flex items-center mr-2">
    <x-site.url model="default" class="{{$clase ?? ''}}" href="{{$location ?? ''}}" value="{{$value ?? ''}}" />
    <x-site.svg model="none" class="ml-1 w-4 h-4" path="M9 5l7 7-7 7" />
</li>
@elseif(($model ?? '') == 'disabled')
<li class="flex items-center mr-2">
    <x-site.url model="default" class="{{$clase ?? ''}}" value="{{$value ?? ''}}" />
</li>
@elseif(($model ?? '') == 'disabled-center')
<li class="flex items-center mr-2">
    <x-site.url model="default" class="{{$clase ?? ''}}" value="{{$value ?? ''}}" />
    <x-site.svg model="none" class="ml-1 w-4 h-4" path="M9 5l7 7-7 7" />
</li>
@endif
@if(($model ?? '') == 'enabled-end')
<li class="flex items-center mr-2">
    <x-site.url model="default" class="{{$clase ?? ''}}" href="{{$location ?? ''}}" value="{{$value ?? ''}}" />
</li>
@endif
