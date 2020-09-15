
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Product" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="List of products offered by {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="service-main-header">
        <h1>Our Services</h1>
    </div>
<div class="services-container-main">
<div class="service">
    <div class="service-header">
        <h4> <a href="/service/application-development/"> App Development </a> </h4>
    </div>
    <div class="service-content">
        <p>
            We deliver state-of-the-art mobile applications for corporate entities and <br> businesses. A
            mobile application can be an extension of your web platform or application, <br> giving you a
            competitive advantage in your space of influence. 
        </p>
    </div>
</div>
<div class="service">
    <div class="service-header">
        <h4> <a href="/service/website-development/"> 
            Website Development 
         </a> </h4>
    </div>
    <div class="service-content">
        <p>
            We work with you towards developing interactive and user-friendly web <br> applications for
            your brand and business. This allows you the opportunity to be available <br> to an
            ever-growing audience to enrich and expand your business. 
        </p>
    </div>
</div>
<div class="service">
    <div class="service-header">
        <h4> <a href="/service/it-consulting/"> 
            IT Consulting 
         </a> </h4>
    </div>
    <div class="service-content">
        <p>
            Information services are offered in conjunction with website development to <br> provide an
            increasingly responsive customer care support unit for your needs and for <br> the needs of
            your customers when they arise. 
       <br>
        <br>
      
            If you are also looking to train your in-house software development team, <br> we offer IT
            consulting services in these areas: 
        </p>
        <div class="mb-6 column">
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Architecture consulting  
            </div>
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Microservices             
            </div>
            
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Spring Boot            
            </div>
        </div>
    </div>
</div>
<div class="service">
    <div class="service-header">
        <h4> <a href="/service/ussd/"> USSD  </a> </h4>
    </div>
    <div class="service-content">
        <p>
            We allow for synchronous communication between your business and your customer <br>
            through simplified, mobile based short codes and interfaces. This opens up <br> your business
            to unsophisticated mobile users who are not well versed with the idea of <br> mobile
            applications and websites. 
            <br>
            <br>
            We build secure USSD applications that can be integrated to facilitate <br> payments
            (collections, disbursements, savings products and revenue mobilization) <br> for your
            business. 
        </p>
    </div>
</div>
<div class="service">
    <div class="service-header">
        <h4> <a href="/service/website-development/"> 
            Software as a Service 
         </a> </h4>
    </div>
    <div class="service-content">
        <p>
            Our software as a service (saas) offering can be deployed as e-commerce solutions in four
            ways: 
        </p>
        <div class="mb-6 column">
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Customer to customer  
            </div>
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Business to customer              
            </div>
            
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Customer to business            
            </div>
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Business to business             
            </div>
        </div>
        <p>
            Businesses and individuals who are interested can simply have it customized to <br> suit their 
            purpose.Asides e-commerce, we have other customizable software solutions for <br> you.
            We also build enterprise software applications. 
        </p>
    </div>

    </div>
    <div class="service">
        <div class="service-header">
            <h4> <a href="/service/website-development/"> 
                Information and Website Security 
             </a> </h4>
        </div>
        <div class="service-content">
            <p>
                With our information and website security service, you get protection against <br> internet
                attacks on precious data. We help you identify, develop and ensure best practices <br> to
                defend yourself against security threats and vulnerabilities. 
            </p>
        </div>
    </div>
    <div class="service">
    
        <div class="service-content">
            <p> <a href="/contact">Contact us for more details</a></p>
            <br>
            <p>
             <i>   We would love to work with you. </i>
            </p>
        </div>
    
    </div>
</div>






@stop
