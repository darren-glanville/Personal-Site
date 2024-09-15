@php
    $items = [
        'home' => 'Welcome',
        'projects' => 'My Projects',
        'about' => 'About me',
        'contact' => 'Get in touch',
    ];
@endphp

<nav class="flex flex-col sm:flex-row items-start sm:items-center gap-12">
    @if (!request()->routeIs('home'))
        <span
            class="hidden sm:block bg-gradient-to-r from-primary-600 via-purple-600 to-fuchsia-500 bg-clip-text font-extrabold text-transparent text-2xl sm:text-3xl">
            Darren Glanville
        </span>
    @endif

    <div class="flex flex-wrap items-center gap-4">
        @foreach ($items as $route => $label)
            <a href="{{ route($route) }}" @class([
                'px-3 py-2 text-primary-700 font-medium sm:text-lg rounded-lg transition-all',
                'bg-primary-700 text-white hover:bg-primary-800 hover:text-white' => request()->routeIs(
                    $route),
                'bg-primary-100 hover:bg-fuchsia-100 hover:text-fuchsia-500' => !request()->routeIs(
                    $route),
            ]) wire:navigate>{{ $label }}</a>
        @endforeach
    </div>
</nav>
