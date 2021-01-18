<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex">
                @if (auth()->check())
                    <div class="lg:w-1/8 lg:mx-10">
                        @include('_sidebar-links')
                    </div>
                @endif

                <div class="flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>

                @if (auth()->check())
                    <div class="lg:w-1/6 bg-blue-200 border border-gray-300 rounded-lg py-4 px-6">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
