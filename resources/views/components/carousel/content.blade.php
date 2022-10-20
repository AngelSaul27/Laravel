@props(['container','indicators','indicador','slotBtns','controls', 'nextattr','prevattr', 'nextbg', 'prevbg'])
<!-- Carousel -->
<div {{ $attributes->merge(['class' => 'relative']) }}> <!-- container -->
    <div class="overflow-hidden relative rounded-lg {{$container ?? ''}}">
        <!-- items -->
        {{$slot ?? ''}}
    </div>

    @if(($indicators ?? '') == "true")
    <!-- indicators -->
        <div class=" {{ $indicador ?? ''}}">
        {{ $slotBtns ?? ''}}
        </div>
    @endif

    @if(($controls ?? '') == "true")
        <!-- NEXT -->
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-2 sm:px-5 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center rounded-md w-6 h-6 sm:w-8 sm:h-8 bg-white/30 group-hover:bg-white/50 {{ $nextbg ?? ''}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-8 w-8 {{ $nextattr ?? ''}}" viewBox="0 0 24 24">
                    <path d="M10 17l5-5-5-5v10z" fill="currentColor" />
                    <path d="M0 24V0h24v24H0z" fill="none"/>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
        <!-- PREV -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center rounded-md w-6 h-6 sm:w-8 sm:h-8 bg-white/30 group-hover:bg-white/50 {{ $prevbg ?? ''}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-8 w-8 {{ $prevattr ?? ''}}" viewBox="0 0 24 24">
                    <path d="M14 7l-5 5 5 5V7z" fill="currentColor" />
                    <path d="M24 0v24H0V0h24z" fill="none"/>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
    @endif
</div>
