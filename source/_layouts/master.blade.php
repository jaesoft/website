<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <!-- header -->
		<header class="w-full px-6 bg-white">
			<div class="container mx-auto max-w-4xl md:flex justify-between items-center">
				<a href="/" title="{{ $page->siteName }} home" class="py-6 w-full text-center md:text-left md:w-auto text-gray-600 no-underline flex justify-center items-center">
                <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />
                {{ $page->siteName }}
				</a>
				<div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
					contact: {{ $page->contactNumber }} <br/>
                    email:   {{ $page->contactEmail }}
				</div>
			</div>
		</header>
		<!-- /header -->
        @include('_nav.menu')

        <main role="main">
            @yield('body')
        </main>

		<!-- footer -->
		<footer class="w-full bg-white px-6 border-t">
			<div class="container mx-auto max-w-4xl py-6 flex flex-wrap md:flex-no-wrap justify-between items-center text-sm">
				&copy;{{ date('Y') }} Jaesoft. All rights reserved.
				<div class="pt-4 md:p-0 text-center md:text-right text-xs">
					<a href="#" class="text-black no-underline hover:underline">Privacy Policy</a>
					<a href="#" class="text-black no-underline hover:underline ml-4">Terms &amp; Conditions</a>
                    <a href="/contact" class="text-black no-underline hover:underline ml-4">Contact Us</a>
                    <a href="/faqs" class="text-black no-underline hover:underline ml-4">FAQs</a>

				</div>
			</div>
		</footer>
		<!-- /footer -->
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
