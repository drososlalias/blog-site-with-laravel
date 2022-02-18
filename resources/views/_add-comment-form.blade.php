@auth
    <form action="/posts/{{ $post->slug }}/comments" method="POST" class="border border-gra-200 p-6 rounded-xl">
        @csrf
        <header class="flex flex-items-center">
            <img src="https://www.gravatar.com/avatar/" alt="" width="30" height="30" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" cols="30" rows="5" class="w-full text-sm focus:outline-none focus:ring"
                placeholder="Comment..." required></textarea>
        </div>

        @error('body')
            <span>{{ $message }}</span>
        @enderror

        <div class="border-t border-gray-200 pt-6 mt-6">
            <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600"
                type="submit">Comment</button>
        </div>
    </form>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Login to leave a
            comment</a>
    </p>
@endauth
