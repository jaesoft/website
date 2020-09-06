
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Product" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="List of products offered by {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="product-header">
        <h1>Services</h1>
    </div>
<div class="container-main">

</div>




@stop
