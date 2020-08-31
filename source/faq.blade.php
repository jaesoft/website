@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
<div class="mx-8">
    <h1>Frequently Asked Questions (FAQs)</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <section>
        <article class="font-sans text-lg text-gray-800 text-center italic">What is Jaesoft?</article>
        <p class="mb-6">Jaesoft is a tech company dedicated towards providing a range of services including financial
technology services to meet your precise technological needs.</p>
    </section>

    <section>
        <article class="font-sans text-lg text-gray-800 text-center italic">How can I contact Jaesoft</article>
        <p class="mb-6">You can contact us at <a href="mailto:{{ $page->contactEmail }}">{{ $page->contactEmail }}</a> or reach us on <a href="tel:{{ $page->contactNumber }}">{{ $page->contactNumber }}</a></p>
    </section>

    <section>
        <article class="font-sans text-lg text-gray-800 text-center italic">What services do you offer?</article>
        <p class="mb-6">
            <ul>
                <li>App Development</li>
                <li>Website Development</li>
                <li>IT Consulting which involves architecture consulting, micro services and spring boot</li>
                <li>USSD development</li>
            </ul>
        </p>
    </section>
    
    <section>
        <article class="font-sans text-lg text-gray-800 text-center italic">How much do Jaesoft services cost?</article>
        <p>We have flexible packages for every kind of business and very flexible payment terms. For a
detailed pricing of your preferred service, contact us for a personalized quote!</p>
    </section>
    </p>
</div>
@endsection
