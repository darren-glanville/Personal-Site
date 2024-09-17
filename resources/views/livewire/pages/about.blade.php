<div class="flex-grow flex flex-col justify-center">
    {{-- Image --}}
    <div class="flex flex-col sm:flex-row justify-center sm:justify-center gap-4 sm:gap-8 mx-auto max-w-3xl">
        <img src="{{ asset('img/darren.jpeg') }}"
            class="w-64 h-auto animate-jump-in mx-auto sm:mx-0 object-contain animate-once animate-duration-700 animate-delay-200" />

        <div class="flex flex-col gap-2 items-center sm:items-start justify-center sm:pb-8">
            <div
                class="text-3xl text-gray-600 font-extrabold animate-fade animate-once animate-duration-1000 animate-delay-200">
                Hi there, I'm
            </div>

            <div class="mb-2">
                <span
                    class="bg-gradient-to-r from-primary-600 via-purple-600 to-fuchsia-500 bg-clip-text text-4xl font-extrabold text-transparent sm:text-6xl animate-fade animate-once animate-duration-1000 animate-delay-500">
                    Darren Glanville
                </span>
            </div>

            <div
                class="text-xl text-gray-500 text-center sm:text-left animate-fade-up animate-once animate-duration-700 animate-delay-[800ms] animate-ease-out">
                I code things, I play games, I'm a father, I'm a kayaker, I'm a rugby lover. I'm also a Senior Web
                Developer baed in the UK.
            </div>
        </div>
    </div>

    {{-- Text --}}
    <div
        class="mt-12 bg-primary-100 p-8 rounded-lg flex flex-col sm:flex-row justify-between gap-8 sm:gap-9 max-w-5xl mx-auto animate-fade-up animate-once animate-delay-[1200ms] animate-ease-in-out">
        <div class="text-center sm:text-left">
            <h2 class="text-3xl mb-2 text-gray-600 font-extrabold">
                What I do
            </h2>

            <p class="text-gray-800 text-lg">This is what I currently work with and there is always more to learn.</p>
        </div>

        <div class="flex flex-wrap justify-evenly sm:justify-end gap-6 sm:gap-4 max-w-4xl">
            @foreach (App\Models\Technology::orderBy('sort')->get() as $index => $tech)
                <div class="flex gap-1 items-center text-primary-600 animate-fade animate-once animate-ease-in-out"
                    style="animation-delay: {{ 1500 + 200 * $index }}ms">
                    @svg($tech->icon, 'w-8 h-8 fill-current')

                    {{ $tech->name }}
                </div>
            @endforeach
        </div>
    </div>
</div>
