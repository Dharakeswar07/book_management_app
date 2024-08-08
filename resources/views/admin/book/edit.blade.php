<x-admin-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Edit Book</h1>
            <form action="{{ route('books.update', $book) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm" id="title" name="title" value="{{ old('title', $book->title) }}">
                    @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="author" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Author</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm" id="author" name="author" value="{{ old('author', $book->author) }}">
                    @error('author')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="genre" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Genre</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm" id="genre" name="genre" value="{{ old('genre', $book->genre) }}">
                    @error('genre')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="publication_year" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Publication Year</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm" id="year" name="year" value="{{ old('year', $book->year) }}">
                    @error('publication_year')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="isbn" class="block text-sm font-medium text-gray-700 dark:text-gray-300">ISBN</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-gray-300 sm:text-sm" id="isbn" name="isbn" value="{{ old('isbn', $book->ISBN) }}">
                    @error('isbn')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
            </form>
        </div>
    </div>
</x-admin-layout>
