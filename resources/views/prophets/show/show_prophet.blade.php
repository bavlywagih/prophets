@extends('template.template')
@section('content')
@php
    $arabic = $prophet->story_arabic ;
    $storys_arabic = explode("\n", $arabic );

    $english = $prophet->story_english ;
    $storys_english = explode("\n", $english );


@endphp
<div class="print px-3">
    
    <a class="mt-3 text-decoration-none print_rtl  text-primary d-block text-start " style="cursor: pointer;" onclick="window.print()" ><i class="fa-solid fa-print"></i>{{ trans('prophets/show.print') }}</a>
</div>

        <div class="prophet-details-container prophet_details_container rounded ">
            <div class="position-relative div-image-qr-media">
                <div class="div_qr_rtl  div-qr-media position-absolute">{{ QrCode::generate(Request::url()); }}</div>
                <div class="image">    
                    <img src="{{ $prophet->image }}" style="" alt="" />
                </div>
            </div>
            
            
            <div class="content">
                <div class="d-flex div_cont_flex_prophet_rtl my-3 ">
                    <h4 class="text-center d-flex"><b>
                    {{ trans('prophets/show.name') }}
                    </b></h4>
                    @if (App::getlocale() == 'ar')
                        <h3 class="text-black"><b>{{ $prophet->name_arabic }} </b></h3>
                    @else
                        <h3 class="text-black"><b>{{ $prophet->name_english}} </b></h3>
                    @endif
                </div>
                <div class=" my-3">
                    <h4 class="text-start h_cont_flex_prophet_rtl"><b>{{ trans('prophets/show.meaning_name') }}</b></h4>
                    @if (App::getlocale() == 'ar')
                        <p class="card-title  opacity-75 text_cont_flex_prophet_rtl">{{ $prophet->meaning_name_arabic}}</p>
                    @else
                        <p class="card-title  opacity-75 ">{{ $prophet->meaning_name_english}}</p>
                    @endif
                </div>
                <div class=" my-3">
                    <h4 class="text-start h_cont_flex_prophet_rtl"><b>{{ trans('prophets/show.story_arabic') }}</b></h4>
                    @if (App::getlocale() == 'ar')
                        @foreach ($storys_arabic as $story_arabic)
                        
                        <p class="card-title  opacity-75 py-1 pe-3 text_cont_flex_prophet_rtl">{{ $story_arabic}}</p>
                        @endforeach
                    @else
                        @foreach ($storys_english as $story_english)
                        <p class="card-title  opacity-75 py-1 pe-3 text_cont_flex_prophet_rtl">{{ $story_english}}</p>
                        @endforeach                    
                    @endif
                </div>
                {{-- <a class="mt-3 text-primary d-block text-start" href="">إلي صفحة الأباء البطاركة...</a> --}}
            </div>
        </div>

@endsection