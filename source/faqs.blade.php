
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Product" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="List of products offered by {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="fag-header">
        <h1>Jeosoft FAQs</h1>
    </div>

<div class="container-main-faqs">
    <div class="question">
        <h4 class="question-header">What is Jaesoft? </h4>
        <p class="answer">
            Jaesoft is a software company dedicated towards providing a range of IT solution services to
            meet your precise business and technological needs. 
        </p>
    </div>
    <div class="question">
        <h4 class="question-header">How can I contact Jaesoft? </h4>
        <p class="answer">
            You can contact us at info@jaesoft.tech or reach us on +233-26-123-456. You can also fill the
            contact form on the website. 
        </p>
    </div>
    <div class="question">
        <h4 class="question-header">What is Jaesoft? </h4>
        <p class="answer">
            Jaesoft is a software company dedicated towards providing a range of IT solution services to
            meet your precise business and technological needs. 
        </p>
    </div>
    <div class="question">
        <h4 class="question-header">After I contact you, how long does it take to get back to me? </h4>
        <p class="answer">
            We can assure you that we will get back to you within 2 - 3 working days. 
        </p>
    </div>
    <div class="question">
        <h4 class="question-header">What services do you offer? </h4>
        <div class="mb-6 column answer">
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                App Development 
            </div>
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                Website Development             
            </div>
            
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                IT Consulting which involves architecture consulting, micro services and spring boot 
            </div>
            <div class="col-item">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                USSD development 
            </div>
        </div>
            
    </div>
    <div class="question">
        <h4 class="question-header">What’s the process involved if I choose to use your services?  </h4>
        <p class="answer">
            You can contact us on phone or through email or through our contact form on our website. <br> After
            we get a full understanding of your needs, we will send you a quote. <br> If it seems interesting to
            you, we then go ahead to start your project.   
        </p>  
    </div>
    <div class="question">
        <h4 class="question-header">How do you guarantee quality?  </h4>
        <p class="answer">
            All our solutions go through thorough testing before they are deployed and delivered. <br> We also
            provide continuous support after development to ensure that you get the best quality work. 
        </p>    
    </div>
    <div class="question">
        <h4 class="question-header">How much do Jaesoft services cost?   </h4>
        <p class="answer">
            We have flexible packages for every kind of business and very flexible payment terms. <br> For a
detailed pricing of your preferred service, contact us for a personalized quote! 
        </p>    
    </div>
    <div class="question">
        <h4 class="question-header">Does Jaesoft provide website maintenance?  </h4>
        <p class="answer">
            Yes. After development and deployment, we provide you maintenance for one (1) year. <br> After
            then, you would be required to renew maintenance if you wish to.  
        </p>    
    </div>

</div>




@stop
