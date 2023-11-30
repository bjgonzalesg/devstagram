<div>
    @if ($posts->count())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 mb-5">
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                        <img src="{{ asset('uploads/' . $post->imagen) }}" alt="post_image.{{ $post->titulo }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div>
            {{-- Paginacion --}}
            {{ $posts->links('pagination::tailwind') }}
        </div>
    @else
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts</p>
    @endif
</div>
