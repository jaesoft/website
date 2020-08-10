@extends('_layouts.master')

@section('body')
    <!-- hero -->
	<div class="w-full py-24 px-6 bg-cover bg-no-repeat bg-center relative z-10" style="background-image: url('/assets/img/preparation_re_t0ce.png');">
		
        <div class="container max-w-4xl mx-auto text-center">
            <h1 class="text-xl leading-tight md:text-3xl text-center text-purple-800 mb-3">Jaesoft IT Solutions</h1>
            <p class="text-md md:text-lg text-center text-gray-800 ">We provide a wide range of IT solutions from USSD to App Development</p>

            <a href="/about" class="mt-6 inline-block bg-gray-100 text-black no-underline px-4 py-3 shadow-lg">Find out more</a>
        </div>

    </div>
    <!-- /hero -->
    <!-- home content -->
    <div class="w-full px-6 py-12 bg-white">
        <div class="container max-w-4xl mx-auto text-center pb-10">
            
            <h3 class="text-xl md:text-3xl leading-tight text-center max-w-md mx-auto text-gray-900 mb-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </h3>

            <a href="/product" class="bg-black text-white px-4 py-3 no-underline">Browse our products</a>

        </div>

        <div class="container max-w-4xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">
            @foreach ($products->where('featured', true) as $post)
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                </h3>
                
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut.</p>
                <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="w-full md:w-2-3 pt-10 md:px-6 md:pt-0">
                <img alt="" src="https://images.unsplash.com/photo-1519643381401-22c77e60520e?w=800" class="w-full h-auto" />
            </div>
        </div>
    </div>
    <!-- /about -->

@stop
