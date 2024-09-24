<div>
    <div class="flex flex-col max-w-5xl mx-auto">
        {{-- Header --}}
        <h1 class="mb-12">
            <span
                class="bg-gradient-to-r from-primary-600 via-purple-600 to-fuchsia-500 bg-clip-text text-4xl font-extrabold text-transparent sm:text-6xl animate-fade animate-once animate-duration-1000 animate-delay-500">
                Projects
            </span>
        </h1>

        {{-- Projects --}}
        <div class="relative sm:mx-12">
            <div
                class="absolute left-2/4 -translate-x-1/2 top-1 bottom-1 w-px border-r-2 border-dashed border-gray-200 max-sm:hidden">
            </div>

            @foreach (\App\Models\Project::orderBy('sort')->get() as $index => $project)
                <div class="flex flex-col-reverse sm:flex-row items-start sm:odd:flex-row-reverse group mb-0 sm:mb-32">
                    {{-- Content --}}
                    <div
                        class="flex items-stretch sm:w-2/5 py-2 sm:group-odd:text-left max-sm:text-center sm:group-even:text-right">
                        <div class="flex flex-col sm:w-10/12 pb-16 sm:group-odd:mr-auto sm:group-even:ml-auto">
                            {{-- Name --}}
                            <h2
                                class="text-3xl mb-2 text-gray-600 font-extrabold intersect:group-odd:animate-fade-right intersect:group-even:animate-fade-left animate-once animate-duration-1000 animate-ease-out animate-delay-[850ms]">
                                {{ $project->name }}
                            </h2>

                            {{-- Description --}}
                            <div
                                class="text-gray-500 text-lg mb-6 intersect:animate-fade-up animate-once animate-ease-in animate-delay-[1000ms]">
                                {!! $project->description !!}
                            </div>

                            {{-- Technologies --}}
                            <div
                                class="flex flex-wrap justify-evenly group-even:sm:justify-end group-odd:sm:justify-start max-sm:gap-2 max-sm:mx-6 sm:gap-x-4 mt-auto intersect:animate-fade-up animate-once animate-ease-in animate-delay-[1100ms]">
                                @foreach ($project->technologies as $index => $tech)
                                    <div class="flex
                                gap-1 items-center"
                                        style="color: {{ $tech->color }}">
                                        @svg($tech->icon, 'w-4 h-4 fill-current')

                                        {{ $tech->name }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Line --}}
                    <div class="flex-grow relative w-8 max-sm:hidden">
                        <div
                            class="absolute left-2/4 -translate-x-1/2 translate-y-2 z-10 w-8 h-8 bg-primary-400 rounded-full">
                        </div>
                    </div>

                    {{-- Image --}}
                    <div
                        class="opacity-0 mb-4 sm:mb-16 sm:w-2/5 rounded-lg bg-primary-200 aspect-video p-4 max-w-full intersect:group-odd:animate-fade-left intersect:group-even:animate-fade-right animate-once animate-ease-out animate-delay-500">
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
