@extends('_layouts.master')

@section('body')
    <!-- hero -->
	<div class="w-full py-24 px-6 bg-cover bg-no-repeat bg-center relative z-10" style="background-image: url('/assets/img/content_team_3epn.png');">
		
        <div class="container max-w-4xl mx-auto text-center">
            <h1 class="text-xl leading-tight md:text-3xl text-center text-gray-800 mb-3">Jaesoft IT Solutions</h1>
            <p class="text-md md:text-lg text-center text-gray-500">We provide a wide range of IT solutions from USSD to App Development</p>

            <a href="/about" class="mt-6 inline-block bg-gray-200 text-gray-700 no-underline px-4 py-3 shadow-lg">Find out more</a>
        </div>

    </div>
    <!-- /hero -->
    <!-- home content -->
    <div class="w-full px-6 py-12 bg-white">
        <div class="container max-w-4xl mx-auto text-center pb-10">
            
            <h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
            We provide an extensive range of financial technology services to meet your precise requirements.
            </h3>

            <a href="/service" class="bg-black text-white px-4 py-3 no-underline">Browse our services</a>

        </div>

        <div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">
            @foreach ($services->where('featured', true) as $post)
                @include('_components.product-preview-inline')
            @endforeach
        </div>
    </div>
    <!-- /home content -->
    @include('_components.newsletter-signup')
    <!-- about -->
    <div class="w-full px-6 py-12 text-left bg-gray-300 text-gray-700 leading-normal">
        <div class="container max-w-4xl mx-auto flex justify-center flex-wrap md:flex-no-wrap">
            <div class="w-full md:w-1-3">
                <h3 class="text-3xl mb-8 text-black leading-tight">
                    Send us a message today
                </h3>
                
                <p class="mb-5">Our team is always happy to hear from you</p>
            </div>
            <div class="w-full md:w-2-3 pt-10 md:px-6 md:pt-0">
                <img alt="" src="/assets/img/preparation_re_t0ce.png" class="w-full h-auto" />
            </div>
        </div>
    </div>
    <!-- /about -->

@stop
