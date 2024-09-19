<div class="flex gap-6">
    @foreach (App\Models\Link::all() as $link)
        <a href="{{ $link->url }}" target="_blank" class="text-primary-400 hover:text-primary-700 transition-all"
            x-tooltip="{
            content: @js($link->name),
            theme: $store.theme,
        }">
            @svg($link->icon, 'w-6 h-6 object-scale-down fill-current')
        </a>
    @endforeach
</div>
