<ul {{$attributes->merge(['class' => 'flex items-center flex-wrap text-sm z-30'])}}>
    <li class="flex items-center mr-2">
        <x-site.url model="icon-left" class="items-center {{$clase ?? ''}}" href="{{$location ?? ''}}" value="{{$value ?? ''}}">
            <x-site.svg model="fill" class="w-4 h-4 mr-1" path="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
        </x-site.url>
        <x-site.svg model="none" class="ml-1 w-4 h-4" path="M9 5l7 7-7 7" />
    </li>
    {{$slot ?? ''}}
</ul>
