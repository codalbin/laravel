<form action="#" method="POST" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-md">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name :</label>
        <input type="text" id="name" name="name" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-700 focus:ring-gray-700 sm:text-sm">
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
        <input type="email" id="email" name="email" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-700 focus:ring-gray-700 sm:text-sm">
    </div>

    <div class="mb-6">
        <label for="message" class="block text-sm font-medium text-gray-700">Message :</label>
        <textarea id="message" name="message" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-700 focus:ring-gray-700 sm:text-sm h-32"></textarea>
    </div>

    <button type="submit"
        class="w-full bg-gray-300 text-gray-700 font-medium py-2 px-4 rounded-md shadow hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
        Send
    </button>
</form>
