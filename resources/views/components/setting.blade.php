@props(['header'])
<section class="py-8 max-w-md mx-auto">
    <h1 class="text-lg font-bold mb-4">
        {{ucwords($header)}}
    </h1>

    <x-panel>
        {{$slot}}
    </x-panel>
</section>
