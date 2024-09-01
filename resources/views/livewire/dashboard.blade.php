<!-- resources/views/livewire/dashboard.blade.php -->
<div class="min-h-screen flex flex-col bg-blue-50">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold text-blue-800">Dashboard</h1>
        </div>
    </header>

    <!-- Main content area -->
    <div class="flex-1 flex overflow-hidden ">
        <!-- Sidebar -->
        <aside class="bg-white w-10 md:w-44 max-w-xs border-r border-blue-200 flex-shrink-0 ">
            <div class="h-full flex  md:ml-6">
                <!-- Sidebar items -->
                <nav>
                    <ul>
                        <li class="mb-4  hover:bg-blue-100 p-2">
                            <a href="/" class="flex space-x-1 rounded-md text-blue-700 font-semibold ">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-home">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                                <span class="hidden md:block">Home</span>

                            </a>
                        </li>
                        <li class="mb-4 flex space-x-1 items-center hover:bg-blue-100 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-clipboard-list">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path d="M9 12l.01 0" />
                                <path d="M13 12l2 0" />
                                <path d="M9 16l.01 0" />
                                <path d="M13 16l2 0" />
                            </svg>
                            <a href="#" class="hidden md:block rounded-md text-blue-700 font-semibold hover:bg-blue-100">Posts</a>
                        </li>
                        <li class="mb-4 flex space-x-1 items-center hover:bg-blue-100 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-category">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4h6v6h-6z" />
                                <path d="M14 4h6v6h-6z" />
                                <path d="M4 14h6v6h-6z" />
                                <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            </svg>
                            <a href="#" class="hidden md:block  rounded-md text-blue-700 font-semibold hover:bg-blue-100">Category</a>
                        </li>
                        <li class="mb-4 flex space-x-1 items-center hover:bg-blue-100 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-700 icon icon-tabler icons-tabler-outline icon-tabler-users">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <a href="#" class="hidden md:block  rounded-md text-blue-700 font-semibold hover:bg-blue-100">Users</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content area -->
        <main class="flex-1 p-6 overflow-auto">
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-xl font-bold text-blue-800 mb-4">Welcome to the Dashboard</h2>
                <p class="text-gray-600">This is the main content area. Select an item from the sidebar to view more details.</p>
            </div>
        </main>
    </div>
</div>