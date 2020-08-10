<div class="my-4 w-full md:w-1/3 flex flex-col items-center justify-center px-4">
    <img alt="{{ $post->title }} cover image" src="{{ $post->cover_image }}" class="w-full h-64 object-cover mb-6" />

    <h2 class="text-xl leading-tight mb-2">{{ $post->title }}</h2>
    <p class="mt-3 mx-auto text-sm leading-normal">{!! $post->getExcerpt(200) !!}</p>
    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-thin tracking-normal mb-2"
    >read more</a>
</div>
