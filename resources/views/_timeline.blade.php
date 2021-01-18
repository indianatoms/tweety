@forelse ($tweets as $tweet)
    @include('_tweet')
@empty
    <p class="mb-4">No Tweets</p>
@endforelse
