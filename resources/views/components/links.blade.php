<div class="flex justify-center gap-6 max-sm:bg-primary-100 max-sm:p-3 max-sm:rounded-lg">
    @foreach (App\Models\Link::all() as $link)
        <a href="{{ $link->url }}" target="_blank"
            class="text-primary-700 sm:text-primary-400 hover:text-primary-700 transition-all"
            x-tooltip="{
            content: @js($link->name),
            theme: $store.theme,
        }">
            @svg($link->icon, 'w-6 h-6 object-scale-down fill-current')
        </a>
    @endforeach
</div>
