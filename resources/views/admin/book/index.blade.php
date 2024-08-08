
<x-admin-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="p-4 w-full max-w-6xl">
            <div class="w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-3">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Books</h1>
                    <a href="{{ route('books.create') }}" class="inline-flex items-center">
                        <!-- Add Book Icon -->
                        <img src="{{ asset('images/add-book.png') }}" title="Add Books" alt="Add Book Icon" class="w-10 h-10" >
                    </a>


                </div>

                {{-- @role('admin') --}}
                {{-- <div class="flex justify-between items-center mb-3"> --}}
                {{-- <a href="{{ route('dashboard') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Dashboard</a> --}}
                {{-- </div> --}}

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Author</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Genre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Publication Year</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">ISBN</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse($books as $key=>$book)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $key+1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $book->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $book->author }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $book->genre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $book->year }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $book->ISBN }}</td>
                                <td class="px-6 py-4 whitespace-nowrap flex items-center space-x-2">
                                    <a href="{{ route('books.edit', $book) }}" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100">
                                        <!-- Edit Icon -->
                                        <img src="{{ asset('images/edit.png') }}" title="Edit Book" alt="Edit Icon" width="350">
                                    </a>
                                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this book?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-gray-100 ml-2">
                                            <!-- Delete Icon -->
                                            <img src="{{ asset('images/delete.png') }}" title="Delete Book" alt="Edit Icon" width="450">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">No books found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
