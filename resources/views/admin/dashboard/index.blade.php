<x-admin.layout>
    <div class="px-4 py-8 sm:px-6">
        <div>
            <h1 class="text-2xl font-medium text-gray-700 sm:text-3xl"> Dashboard
            </h1>

            <div class="hidden mt-3 overflow-y-auto text-sm lg:items-center lg:flex whitespace-nowrap">
                <a href="#" class="text-gray-600 hover:underline">
                    Pages
                </a>

                <span class="mx-1 text-gray-500">
                    /
                </span>

                <a href="#" class="text-indigo-600 hover:underline">
                    Dashboard
                </a>
            </div>
        </div>

        <div class="mt-6">
            <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center justify-between px-6 py-3 bg-white rounded-lg shadow-sm">
                    <div>
                        <p class="font-medium text-gray-500">Today’s Money</p>

                        <div class="flex items-end">
                            <h2 class="mt-1 text-2xl font-medium text-gray-800">$53,000</h2>
                            <span class="mx-2 text-indigo-500">
                                +55%
                            </span>
                        </div>
                    </div>

                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                </div>

                <div class="flex items-center justify-between px-6 py-3 bg-white rounded-lg shadow-sm">
                    <div>
                        <p class="font-medium text-gray-500">Today’s Users</p>

                        <div class="flex items-end">
                            <h2 class="mt-1 text-2xl font-medium text-gray-800">2,300</h2>
                            <span class="mx-2 text-indigo-500">
                                +5%
                            </span>
                        </div>
                    </div>

                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                </div>

                <div class="flex items-center justify-between px-6 py-3 bg-white rounded-lg shadow-sm">
                    <div>
                        <p class="font-medium text-gray-500">New Clients</p>

                        <div class="flex items-end">
                            <h2 class="mt-1 text-2xl font-medium text-gray-800">+3,052</h2>
                            <span class="mx-2 text-red-500">
                                -14%
                            </span>
                        </div>
                    </div>

                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                </div>

                <div class="flex items-center justify-between px-6 py-3 bg-white rounded-lg shadow-sm">
                    <div>
                        <p class="font-medium text-gray-500">Total Sales</p>

                        <div class="flex items-end">
                            <h2 class="mt-1 text-2xl font-medium text-gray-800">$89,000</h2>
                            <span class="mx-2 text-indigo-500">
                                +8%
                            </span>
                        </div>
                    </div>

                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                </div>
            </section>

            <section class="mt-6 space-y-6">
                <div class="w-full p-4 bg-white rounded-lg xl:p-6">
                    <div class="mb-5 rounded-lg bg-gradient-to-r from-indigo-900 to-gray-900">
                        <canvas id="barChart" height="391"
                            style="display: block; box-sizing: border-box; height: 312.8px; width: 1176px;"
                            width="1470"></canvas>
                    </div>

                    <div>
                        <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">
                            active users</h1>

                        <p class="mt-2 text-gray-500">
                            <span class="text-green-500">(+10)</span>&nbsp;than last week
                        </p>

                        <div class="grid gap-12 mt-8 sm:grid-cols-2 md:grid-cols-4">
                            <div>
                                <div class="flex items-center capitalize">
                                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="mx-3 font-medium text-gray-500 ">users</div>
                                </div>

                                <div class="mt-3">
                                    <h1 class="text-xl font-semibold text-gray-600">23,212</h1>

                                    <div class="w-full mt-3 overflow-hidden bg-gray-200 rounded-full">
                                        <div class="w-8/12 h-1 bg-indigo-500"></div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center capitalize">
                                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="mx-3 font-medium text-gray-500 ">Clicks</div>
                                </div>

                                <div class="mt-3">
                                    <h1 class="text-xl font-semibold text-gray-600">3,125m</h1>

                                    <div class="w-full mt-3 overflow-hidden bg-gray-200 rounded-full">
                                        <div class="w-11/12 h-1 bg-indigo-500"></div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center capitalize">
                                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                    </div>

                                    <div class="mx-3 font-medium text-gray-500 ">Sales</div>
                                </div>

                                <div class="mt-3">
                                    <h1 class="text-xl font-semibold text-gray-600">$89,000</h1>

                                    <div class="w-full mt-3 overflow-hidden bg-gray-200 rounded-full">
                                        <div class="w-5/6 h-1 bg-indigo-500"></div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex items-center capitalize">
                                    <div class="p-2 text-white bg-indigo-500 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="mx-3 font-medium text-gray-500 ">Items</div>
                                </div>

                                <div class="mt-3">
                                    <h1 class="text-xl font-semibold text-gray-600">260</h1>

                                    <div class="w-full mt-3 overflow-hidden bg-gray-200 rounded-full">
                                        <div class="w-2/3 h-1 bg-indigo-500"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full p-5 overflow-hidden bg-white rounded-lg">
                    <div class="mb-2">
                        <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">
                            sales overview</h1>

                        <p class="mt-2 text-gray-500">
                            <span class="text-green-500">(+5) more</span>&nbsp;in 2022
                        </p>
                    </div>

                    <canvas id="lineChart" height="393"
                        style="display: block; box-sizing: border-box; height: 314.4px; width: 1184px;"
                        width="1480"></canvas>
                </div>

            </section>

            <section class="mt-6 space-y-6 xl:flex xl:space-y-0 xl:-mx-3">
                <div class="w-full p-4 bg-white rounded-lg shadow-sm xl:mx-3 xl:w-2/3 xl:p-6">
                    <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">
                        Projects</h2>

                    <p class="flex items-center mt-2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>

                        <span class="mx-2">30 done this month</span>
                    </p>

                    <div class="flex flex-col mt-8">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase rtl:text-right">
                                                    <span>COMPANIES</span>
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase rtl:text-right">
                                                    <span>MEMBERS</span>
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase rtl:text-right">
                                                    <span>BUDGET</span>
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-sm font-medium tracking-wider text-left text-gray-500 uppercase rtl:text-right">
                                                    <span>COMPLETION</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td
                                                    class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                                    Chakra Soft UI Version
                                                </td>

                                                <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                    <div
                                                        class="relative z-0 flex -space-x-1 overflow-hidden">
                                                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-20 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td
                                                    class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                                    $128.00
                                                </td>

                                                <td
                                                    class="px-6 py-4 text-gray-700 capitalize whitespace-nowrap">
                                                    <span class="font-medium text-indigo-500">66%</span>
                                                    <div
                                                        class="w-full h-2 overflow-hidden bg-gray-200 rounded-full">
                                                        <div class="w-8/12 h-full bg-indigo-500"></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                                    Add Progress Track
                                                </td>

                                                <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                    <div
                                                        class="relative z-0 flex -space-x-1 overflow-hidden">
                                                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td
                                                    class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                                    $220.00
                                                </td>

                                                <td
                                                    class="px-6 py-4 text-gray-700 capitalize whitespace-nowrap">
                                                    <span class="font-medium text-indigo-500">25%</span>
                                                    <div
                                                        class="w-full h-2 overflow-hidden bg-gray-200 rounded-full">
                                                        <div class="w-3/12 h-full bg-indigo-500 "></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                                    Fix Platform Errors
                                                </td>

                                                <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                    <div
                                                        class="relative z-0 flex -space-x-1 overflow-hidden">
                                                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td
                                                    class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                                    $89.00
                                                </td>

                                                <td
                                                    class="px-6 py-4 text-gray-700 capitalize whitespace-nowrap">
                                                    <span class="font-medium text-indigo-500">100%</span>
                                                    <div
                                                        class="w-full h-2 overflow-hidden bg-gray-200 rounded-full">
                                                        <div class="w-full h-full bg-indigo-500"></div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                                    Chakra Soft UI Version
                                                </td>

                                                <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                    <div
                                                        class="relative z-0 flex -space-x-1 overflow-hidden">
                                                        <img class="relative z-40 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=880&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-30 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-20 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-10 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                        <img class="relative z-0 inline-block w-6 h-6 rounded-full ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                                            alt="">
                                                    </div>
                                                </td>

                                                <td
                                                    class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                                    $256.00
                                                </td>

                                                <td
                                                    class="px-6 py-4 text-gray-700 capitalize whitespace-nowrap">
                                                    <span class="font-medium text-indigo-500">75%</span>
                                                    <div
                                                        class="w-full h-2 overflow-hidden bg-gray-200 rounded-full">
                                                        <div class="w-9/12 h-full bg-indigo-500 "></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full p-4 bg-white rounded-lg shadow-sm xl:mx-3 xl:w-1/3 xl:p-6">
                    <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">Orders
                        overview</h2>

                    <p class="mt-2 text-gray-500">
                        <span class="text-green-500">+30%</span>&nbsp;this month
                    </p>

                    <div class="flow-root mt-6">
                        <ul class="-mb-8">
                            <li>
                                <div class="relative pb-8">
                                    <span
                                        class="absolute top-4 left-4 rtl:right-4 rtl:left-auto -ml-px h-full w-0.5 bg-gray-200"
                                        aria-hidden="true"></span>
                                    <div class="relative flex">
                                        <div>
                                            <span
                                                class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 text-blue-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="min-w-0 flex-1 pt-1.5 mx-3">
                                            <div>
                                                <p class="text-sm font-medium text-gray-700">$2400, Design
                                                    changes</p>
                                                <p
                                                    class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">
                                                    22 DEC 7:20 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span
                                        class="absolute top-4 left-4 -ml-px rtl:right-4 rtl:left-auto h-full w-0.5 bg-gray-200"
                                        aria-hidden="true"></span>
                                    <div class="relative flex">
                                        <div>
                                            <span
                                                class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 text-indigo-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="min-w-0 flex-1 pt-1.5 mx-3">
                                            <div>
                                                <p class="text-sm font-medium text-gray-700">New order
                                                    #4219423</p>
                                                <p
                                                    class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">
                                                    21 DEC 11:21 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <span
                                        class="absolute top-4 left-4 -ml-px rtl:right-4 rtl:left-auto h-full w-0.5 bg-gray-200"
                                        aria-hidden="true"></span>
                                    <div class="relative flex">
                                        <div>
                                            <span
                                                class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 text-cyan-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="min-w-0 flex-1 pt-1.5 mx-3">
                                            <div>
                                                <p class="text-sm font-medium text-gray-700">New card added
                                                    for order #3210145</p>
                                                <p
                                                    class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">
                                                    21 DEC 11:21 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="relative pb-8">
                                    <div class="relative flex">
                                        <div>
                                            <span
                                                class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-5 h-5 text-green-500" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>


                                        <div class="min-w-0 flex-1 pt-1.5 mx-3">
                                            <div>
                                                <p class="text-sm font-medium text-gray-700">Server
                                                    Payments for April</p>
                                                <p
                                                    class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">
                                                    21 DEC 9:28 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-admin.layout>
