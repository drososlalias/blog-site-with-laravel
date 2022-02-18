@props(['comment'])
<article class="flex bg-gray-100 p-6 border-gray-200 rounded space-x-4">
    <div class="flex-shrink-0">
        <img src="https://www.gravatar.com/avatar/" alt="" width="60" height="60">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs">Posted <time>{{ $comment->created_at->format('F j, Y , g:i a') }}</time></p>
        </header>
        <p> {{ $comment->body }} </p>
    </div>
</article>
