<div {{ $attributes->merge(['class' => 'duration-500 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20'])}} data-carousel-item="">
    {{ $slot ?? ''}}
</div>