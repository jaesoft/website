@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')

    <div class="about-header">
        <h1>About us</h1>
    </div>
    <div class="about-container">
        <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

        <div class="section">
            <div class="section-component">
                    <div class="section-component-header">
                        <h3>Who we are </h3>
                    </div>
                    <div class="section-component-content">
                        <p class="mb-6">
                            We are a team of qualified professionals with expertise and experiences in software engineering
                            and software architecture.
                            <br>
                            We also boast of a formidable team of business analysts and sales and marketing experts who are
                            always on the move to give you the quality service you deserve. 
                        </p>
                    </div>
            </div>
            <div class="section-component">
                <div class="section-component-header">
                    <h3>Our Process </h3>
                </div>
                <div class="section-component-content">
                    <ol class="mb-6">
                        <li> After you contact us, we get your project requirements and business objectives. </li>
                        <li>With this, expect to get a detailed quote from us. </li>
                        <li>Next, we start your project. </li>
                        <li>With continuous communication, we deliver your project after thorough testing. </li>
                        <li>We provide you with support after your project is delivered. </li>
                        <li>We also provide maintenance for a period of 1 year, thereafter, you will need to renew the
                            maintenance service. 
                        </li>
                    </ol>
                </div>

            </div>
            <div class="section-component">
                <div class="section-component-header">
                    <h3>Projects </h3>
                </div>
                <div class="section-component-content">
                    <div class="mb-6 column">
                        <div class="col-item">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            Voting system
                            for competitions, elections and all kinds of voting 
                        </div>
                        <div class="col-item">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            Real-time tracking system for vehicles, motor bikes and industrial generators 
                        </div>
                        
                        <div class="col-item">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            Health system
                            for hospitals, health institutions and health insurance companies 
                        </div>
                        
                        <div class="col-item">
                            @include('_components.newsletter-signup')
                        </div>
                        <div class="div-col-item">
                            <p class="mb-6">
                              <a href="#">  Have more questions?</a>
                            </p>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
        

        </div>
    </div>
@endsection
