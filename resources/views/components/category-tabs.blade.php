<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
        <li class="me-2">
            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-800 rounded-lg !text-white !bg-blue-800">
                All
            </a>
        </li>
        @forelse ($categories as $category)
            <li class="me-2">
                <a href="#" class="inline-block px-4 py-2 rounded-lg 
                                                        hover:text-gray-900 hover:bg-gray-100 
                                                        dark:hover:bg-gray-600 dark:hover:text-white">
                    {{ $category->name }}
                </a>
            </li>
        @empty
            {{ $slot }}
        @endforelse
    </ul>
</div>