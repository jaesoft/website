@extends('_layouts.master')
 
@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush
 
@section('body')
           <div class=" page-banner w-full bg-cover bg-no-repeat bg-center "style="background-image: url('/assets/img/bg2.jpg');">
                <div class="page-banner-overley">
                    <div class="page-banner-content">
                        <h1 class="text-white bold"> {{ $page->title }}</h1>
                    </div>
                </div>
            </div>
        <div class="service-flex-container">
            <div class=" service-flex-1 service-p border-b border-blue-200 mb-10 pb-4" v-pre>
                @yield('content')
            </div>
        
        
            <div class="service-flex-2 service-img-container">
                @if ($page->cover_image)
                    <img class=" service-img  px-6 relative " src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
                @endif
            </div>
        </div>
    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
    
@endsection
