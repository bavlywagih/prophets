@extends('template.template')
@section('content')
    <div class="p-3 border w-50 m-auto text-center mt-3">
        <a href="{{ route('Prophets_create') }}" class="btn btn-success ">{{ trans('Prophets/Prophets.add') }}</a>
    </div>
    @if (App::getlocale() == 'ar')
        <div class="m-auto p-3  d-grid  " style="width: 90%; grid-template-columns: repeat(3, 1fr); padding: 2rem !important;">
            @foreach ($prophets as $prophet)
                <a href="{{ route('Prophet_show', $prophet->id ) }}" class="card  mx-3 align-items-end text-decoration-none my-3" >
                    <div class="card-body">
                        {{ $prophet->name_arabic }} النبي
                    </div>            
                    <div class="card-body">
                        <span class="text-muted">
                            .... {{substr($prophet->meaning_name_arabic, 0, 55)}} 
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="m-auto d-grid" style="width: 90%; grid-template-columns: repeat(3, 1fr); padding: 2rem !important;">
            @foreach ($prophets as $prophet)
                <a href="{{ route('Prophet_show', $prophet->id ) }}" class="card  mx-3 align-items-end text-decoration-none my-3 d-block" >
                    <p class="card-body">
                        {{ $prophet->name_english }}
                    </p>            
                    <div class="card-body">
                        <span class="text-muted">
                        {{substr($prophet->meaning_name_english, 0, 50)}} .....
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@endsection