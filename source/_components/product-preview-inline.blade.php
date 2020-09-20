
    <div class=" width-20 c-container mg-l box-shadow-hover  my-4  ">
        <div class="lead-img">
            <img alt="{{ $post->title }} cover image" src="{{ $post->cover_image }}" class="w-full h-64 object-cover mb-6" />
        </div>

        <div class="main-content">
    
            <h2 class="text-xl leading-tight mb-2">{{ $post->title }}</h2>
            <p class="mt-3 mx-auto text-sm leading-normal">{!! $post->getExcerpt(200) !!}</p>
            <a
                href="{{ $post->getUrl() }}"
                title="Read more - {{ $post->title }}"
                class="uppercase font-thin tracking-normal mb-2"
            >read more</a>
        </div>

    </div>
