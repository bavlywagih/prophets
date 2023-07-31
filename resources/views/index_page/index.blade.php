@extends('template.template')
@section('content')
<style>
    body{
        background-image: url({{ asset('image/index/jhj.jpeg') }});
        background-size: 15%;
        background-position: center;
        background-attachment: fixed;
    }
</style>
<div>
    <div class="container">
        <div class="page-banner home-banner">
            <div class="row flex-row  align-items-center flex_reverse_index_rtl h-100">
                <div class="col-md-6 py-5 wow fadeInLeft">
                    <h1 class="mb-4 text-center">{{ trans('index/index_trans.sequence_old_testament_prophets') }}</h1>
                    <p class="text-lg text-grey mb-5 text-center">{{ trans('index/index_trans.site_old_testament_prophets_sequence') }}</p>
                </div>
                <div class="col-md-6 py-5 wow zoomIn">
                    <div class="img-fluid img-fluid-ltr-index text-center">
                        <img class="w-100" src="{{ asset('image/index/jesus.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
    