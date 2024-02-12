<x-app-layout>
<!-- FAQ -->
<div class="max-w-[85rem] px-4 py-2 sm:px-6 lg:px-8 border-y border-gray-200 dark:border-gray-700 mx-auto">
    <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
        <li class="inline-flex items-center">
          <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="{{ route('landing.home.index')}}">
            Home
          </a>
          <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
          Ask Technician
        </li>
      </ol>
</div>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

    <!-- Grid -->
    <div class="grid md:grid-cols-5 gap-10">
      <div class="md:col-span-2">
        <div class="max-w-xs">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Ask Technician</h2>
            <p class="mt-1 hidden md:block text-gray-600 dark:text-gray-400">Find technicians to solve your gadget issues.</p>
        </div>

      </div>
      <!-- End Col -->

      <div class="md:col-span-3">
        <form action="{{ route('landing.ask-technician.index') }}" method="GET" class="w-full">

            <div class="relative">
                <input type="text" name="search" placeholder="Search..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring focus:border-blue-500">
                <button class="absolute right-0 top-0 mt-2 mr-4">
                    <x-tabler-user-search />
                </button>
              </div>

        </form>

      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End FAQ -->
</x-app-layout>
