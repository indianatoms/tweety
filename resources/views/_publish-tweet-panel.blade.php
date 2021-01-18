<div class="border border-blue-400 rounded-lg py-6 px-8 mx-4 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc?" required autofocus>

        </textarea>
        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="Your Avatar" class="rounded-full mr-2" width="50" height="50">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg py-2 px-2 text-white h-10">
                Tweet-a-roo!
            </button>
        </footer>

    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
