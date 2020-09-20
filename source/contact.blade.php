@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')

<div class=" page-banner w-full bg-cover bg-no-repeat bg-center "style="background-image: url('/assets/img/bg2.jpg');">
    <div class="page-banner-overley">
        <div class="page-banner-content">
            <h1 class="text-white bold"> Contact {{ $page->siteName }}</h1>
        </div>
    </div>
</div>
<div class="contact-container">

    <h3 class="form-header">Fill the form below to send us a direct mail</h3>
    <form action="/contact" class="mb-12">
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                    Name
                </label>
    
                <input
                    type="text"
                    id="contact-name"
                    placeholder="Jane Doe"
                    name="name"
                    class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                    required
                >
            </div>
    
            <div class="w-full px-3 md:w-1/2">
                <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                    Email Address
                </label>
    
                <input
                    type="email"
                    id="contact-email"
                    placeholder="email@domain.com"
                    name="email"
                    class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                    required
                >
            </div>
        </div>
    
        <div class="w-full mb-12">
            <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
                Message
            </label>
    
            <textarea
                id="contact-message"
                rows="4"
                name="message"
                class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
                placeholder="A lovely message here."
                required
            ></textarea>
        </div>
    
        <div class="flex justify-end w-full">
            <input
                type="submit"
                value="Submit"
                class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
            >
        </div>
    </form>
    <div>
        <div>
            <h3>What is next?</h3>
        </div>
        <div>
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span>  
                We’ll contact you with more information on the next steps within the next 2 - 3 business
                days. 
            </span>
        </div>

        <div>
            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> </span>
                <span>  
                    We would also love to collect all your project requirements, get clarifications on your
                    business objectives, and expectations towards your project.         </span>
        </div>

        <div>
            <span><i class="fa fa-arrow-right" aria-hidden="true"></i> </span>
                <span>  
                    Thereafter, we set to work.         
                </span>
        </div>
        <br>
        <br>
    </div>
    <div class="bottm-container">
        <div class="mb-8">
            <div>
            <h4>
                You can reach us on ...
            </h4>
            </div>
            <div>
                <span class="icon">        
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                </span>
                <span>  phone number:  </span>
                <span>   {{ $page->contactNumber }} </span>
            </div>
            <div>
            <span class="icon">        
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
            <span>  email:  </span>
            <span>    {{ $page->contactEmail}}
    
    </div>
</div>
<div class="map-container">
    <div class="map-header">
        <div class="map-icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
        </div>
        <div>
            <h4>Location</h4>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.171211440912!2d-0.20923168523412286!3d5.5416119959819525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMzInMjkuOCJOIDDCsDEyJzI1LjQiVw!5e0!3m2!1sen!2sgh!4v1600598738543!5m2!1sen!2sgh" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

    </div>


@stop
