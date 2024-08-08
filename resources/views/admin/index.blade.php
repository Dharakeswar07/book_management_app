<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Total Books -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 flex items-center">
                        <!-- Icon for Total Books -->
                        <svg class="h-12 w-12 text-blue-500 dark:text-blue-300 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3zm6 2v14h8V5H9zm2 2h4v10h-4V7z" />
                        </svg>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-800 dark:text-gray-200">Total Books</h3>
                            <p class="text-4xl font-semibold text-gray-900 dark:text-gray-100">{{ $totalBooks }}</p>
                        </div>
                    </div>
                </div>
                <!-- Total Users -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 flex items-center">
                        <!-- Icon for Total Users -->
                        <svg class="h-12 w-12 text-green-500 dark:text-green-300 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 14v1a4 4 0 01-8 0v-1m4-8a4 4 0 00-4 4v2a4 4 0 004 4h1a4 4 0 004-4v-2a4 4 0 00-4-4h-1zm-1 10v-1a2 2 0 00-2-2h-2a2 2 0 00-2 2v1m4-5v3" />
                        </svg>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-800 dark:text-gray-200">Total Users</h3>
                            <p class="text-4xl font-semibold text-gray-900 dark:text-gray-100">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
