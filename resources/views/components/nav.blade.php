@php
    $items = [
        'home' => ['title' => 'Welcome', 'icon' => 'home'],
        'projects' => ['title' => 'My Projects', 'icon' => 'beaker'],
        'about' => ['title' => 'About me', 'icon' => 'user'],
        'contact' => ['title' => 'Get in touch', 'icon' => 'hand-raised'],
    ];
@endphp

<nav class="flex flex-col sm:flex-row items-start sm:items-center gap-12">
    @if (!request()->routeIs('home'))
        <a href = "{{ route('home') }}" class="hidden sm:block" wire:navigate>
            <span
                class="bg-gradient-to-r from-primary-600 via-purple-600 to-fuchsia-500 bg-clip-text font-extrabold text-transparent text-2xl sm:text-3xl">
                Darren Glanville
            </span>
        </a>
    @endif

    <div class="flex flex-wrap items-center gap-4 w-full">
        @foreach ($items as $route => $label)
            <a href="{{ route($route) }}" @class([
                'px-3 py-2 text-primary-700 font-medium sm:text-lg rounded-lg transition-all max-sm:flex-auto text-center',
                'bg-primary-700 text-white hover:bg-primary-800 hover:text-white' => request()->routeIs(
                    $route),
                'bg-primary-100 hover:bg-fuchsia-100 hover:text-fuchsia-500' => !request()->routeIs(
                    $route),
            ]) wire:navigate>
                <span class="sm:hidden">
                    @svg('heroicon-s-' . $label['icon'], 'w-6 h-6 mx-auto')
                </span>

                <span class="hidden sm:inline">
                    {{ $label['title'] }}
                </span>

            </a>
        @endforeach
    </div>
</nav>
