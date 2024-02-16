<x-app-layout>
    <div class="max-w-[85rem] mt-5 px-4 py-2 sm:px-6 lg:px-8 border-y border-gray-200 dark:border-gray-700 mx-auto">
        <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                    href="{{ route('landing.home.index') }}">
                    Home
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500"
                    href="{{ route('landing.home.index') }}">
                    Ask Technician
                </a>
                <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </li>

            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200"
                aria-current="page">
                {{ $technician->name }}
            </li>
        </ol>
    </div>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

        <!-- Grid -->
        <div class="grid md:grid-cols-5 gap-10">
            <div class="md:col-span-3">
                <!-- Team -->
                <div class="max-w-[85rem] px-0 mb-10 mx-auto">
                    <!-- Title -->
                    <div class="max-w-2xl mb-10 lg:mb-14">
                        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
                            {{ $technician->name }}
                        </h2>
                        <p class="mt-1 text-gray-600 dark:text-gray-400">Our Technicians</p>
                    </div>
                    <!-- End Title -->
                    <div
                        class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
                        <div class="flex items-center gap-x-4">
                            <img class="rounded-full w-20 h-20"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80"
                                alt="Image Description">
                            <div class="grow">
                                <h3 class="font-medium text-gray-800 dark:text-gray-200">
                                    {{ $technician->name }}
                                </h3>
                                <p class="text-xs text-gray-500">
                                    @php
                                        $maxSpecialists = 3;
                                        $specialistsCount = count($technician->specialists);
                                    @endphp
                                    @for ($i = 0; $i < min($maxSpecialists, $specialistsCount); $i++)
                                        {{ $technician->specialists[$i]->name }}
                                        @if ($i < min($maxSpecialists, $specialistsCount) - 1)
                                            ,
                                        @endif
                                    @endfor
                                    @if ($specialistsCount > $maxSpecialists)
                                        + more
                                    @endif
                                </p>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <div class="md:col-span-2">
                <div class="max-w-xs">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Ask Technician</h2>
                    <p class="mt-1 hidden md:block text-gray-600 dark:text-gray-400">Find technicians to solve your
                        gadget issues.</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
