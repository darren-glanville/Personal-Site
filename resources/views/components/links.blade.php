@props([
    'page' => false,
])

<div @class([
    'max-md:fixed max-md:bottom-0 max-md:left-0 max-md:w-full flex items-center justify-center gap-3 max-md:bg-primary-500 z-50 max-md:p-3 max-md:h-18' => !$page,
    'grid md:grid-cols-2 gap-6' => $page,
])>
    @foreach (App\Models\Link::all() as $index => $link)
        @if ($page)
            <a href="{{ $link->url }}" target="_blank"
                class="flex flex-col gap-2 items-center bg-primary-600 p-4 rounded-lg text-white hover:bg-primary-900 transition-all animate-duration-700 animate-fade animate-once animate-ease-in-out"
                style="animation-delay: {{ 1500 + 200 * $index }}ms">
                @svg($link->icon, 'w-12 h-12 object-scale-down fill-current')

                <div class="text-center">
                    {{ $link->name }}
                </div>
            </a>
        @else
            <a href="{{ $link->url }}" target="_blank"
                x-tooltip="{
            content: @js($link->name),
            theme: $store.theme,
        }"
                class='text-primary-700 md:text-primary-400 max-md:text-white p-2 md:hover:text-primary-700 transition-all'>
                @svg($link->icon, 'w-6 h-6 object-scale-down fill-current')
            </a>
        @endif
    @endforeach
</div>
