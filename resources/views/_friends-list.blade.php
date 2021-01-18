<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse (auth()->user()->follows as $user)
        <li class=" {{ $loop->last ? '' : 'mb-4' }}">
            <div class="flex items-center text-small">
                <a href="{{ route('profile', $user->username) }} ">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 " width="40" , height="40">
                </a>

                <a href="{{ route('profile', $user->username) }} ">{{ $user->name }}</a>
            </div>
        </li>
    @empty
        <li>No friends yet!</li>
    @endforelse
</ul>
