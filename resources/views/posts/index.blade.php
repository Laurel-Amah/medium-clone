<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-category-tabs>
                        No Categories
                    </x-category-tabs>
                </div>
            </div>

            <div class="mt-8 text-gray-900 justify-center">
                @forelse ($posts as $p)
                    <x-post-item :post="$p"></x-post-item>
                @empty
                    <div class="text-gray-400 text-center py-16"> No posts found. </div>
                @endforelse
            </div>

            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>