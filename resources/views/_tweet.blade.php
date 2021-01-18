<div class="border border-gray-400 rounded-lg mx-4 mb-2 flex p-4">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }} ">
            <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-4" width="50" height="50">
        </a>
    </div>
    <div class="font-bold mb-4">
        <h5> <a href="{{ $tweet->user->path() }} ">{{ $tweet->user->name }}</a></h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
