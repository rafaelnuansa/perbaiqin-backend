<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 dark:bg-slate-900 overflow-hidden">
    <div x-data="{ sidebarOpen: false }" class="relative flex h-screen text-gray-800 bg-white font-inter">
        <div x-show="sidebarOpen" @click.away="sidebarOpen = false" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

        <!-- Sidebar -->
        <div x-bind:class="{ 'translate-x-0 ease-in': sidebarOpen, '-translate-x-full ease-out': !sidebarOpen }"
            class="fixed inset-y-0 left-0 z-30 w-64 px-4 overflow-y-auto transition duration-200 transform bg-white border-r border-gray-100 lg:translate-x-0 lg:relative lg:inset-0 -translate-x-full ease-out">
            <div class="flex text-center items-center mt-8">
                {{-- <img class="w-auto h-8" src="/preview/premium-dashboard/assets/images/full-logo.svg" alt=""> --}}
          <h2 class="text-lg ">PerbaiQin</h2>
            </div>

            <hr class="my-6 border-gray-100">

            <nav class="space-y-8">
                <div class="space-y-4">
                    <h3 class="px-4 text-sm tracking-wider text-gray-400 uppercase">PAGES</h3>

                    <a class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-200 transform bg-gray-200 rounded-lg bg-opacity-40"
                        href="/preview/premium-dashboard/">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>

                        <span class="mx-3 font-medium capitalize">Dashboard</span>
                    </a>

                    <div x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex items-center justify-between w-full px-4 py-2 text-gray-500 transition-colors duration-300 transform rounded-lg hover:text-gray-600 hover:bg-gray-100 bg-opacity-40">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16"></path>
                                </svg>

                                <span class="mx-3 font-medium capitalize">Example</span>
                            </span>

                            <span class="rtl:rotate-180">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open" x-transition:enter="transition ease-out duration-200 transform"
                            x-transition:enter-start="opacity-0 -translate-y-5"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-5" class="mt-2" style="display: none;">
                            <a class="block py-2 text-sm text-gray-500 transition-colors duration-300 transform rounded-lg pl-14 rtl:pr-14 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40"
                                href="/preview/premium-dashboard/blank">Blank</a>
                            <a class="block py-2 text-sm text-gray-500 transition-colors duration-300 transform rounded-lg pl-14 rtl:pr-14 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40"
                                href="/preview/premium-dashboard/404">404</a>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="px-4 text-sm tracking-wider text-gray-400 uppercase">ACCOUNT PAGES</h3>

                    <a class="flex items-center px-4 py-2 text-gray-500 transition-colors duration-300 transform rounded-lg hover:text-gray-600 hover:bg-gray-100 bg-opacity-40"
                        href="/preview/premium-dashboard/profile">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z"
                                fill="currentColor"></path>
                            <path
                                d="M6.34315 16.3431C4.84285 17.8434 4 19.8783 4 22H6C6 20.4087 6.63214 18.8826 7.75736 17.7574C8.88258 16.6321 10.4087 16 12 16C13.5913 16 15.1174 16.6321 16.2426 17.7574C17.3679 18.8826 18 20.4087 18 22H20C20 19.8783 19.1571 17.8434 17.6569 16.3431C16.1566 14.8429 14.1217 14 12 14C9.87827 14 7.84344 14.8429 6.34315 16.3431Z"
                                fill="currentColor"></path>
                        </svg>


                        <span class="mx-3 font-medium capitalize">Profile</span>
                    </a>

                    <a class="flex items-center px-4 py-2 text-gray-500 transition-colors duration-300 transform rounded-lg hover:text-gray-600 hover:bg-gray-100 bg-opacity-40"
                        href="/preview/premium-dashboard/sign-in">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                            </path>
                        </svg>

                        <span class="mx-3 font-medium capitalize">Sign In</span>
                    </a>

                    <a class="flex items-center px-4 py-2 text-gray-500 transition-colors duration-300 transform rounded-lg hover:text-gray-600 hover:bg-gray-100 bg-opacity-40"
                        href="/preview/premium-dashboard/sign-up">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>

                        <span class="mx-3 font-medium capitalize">Sign Up</span>
                    </a>
                </div>
            </nav>
        </div>
        <div class="flex flex-col flex-1 overflow-hidden bg-gray-100">
            <x-admin.header></x-admin.header>
            <main class="flex-1 overflow-hidden">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
