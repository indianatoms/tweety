<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img class="object-fill h-48 w-full mb-2" src="/images/default-avatar.png" alt="">
            <img src="{{ $user->avatar }}" alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left: 50%"
                width="150">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style=max-width: 270px>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit
                        Profile</a>
                @endcan
                @include('follow-button')
            </div>

        </div>
        <p class="text-sm ">
            Hello Mello Zello
        </p>

    </header>

    @include('_timeline', ['tweets' => $user->tweets])
</x-app>
