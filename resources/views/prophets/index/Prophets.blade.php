@extends('template.template')
@section('content')
    <div class="p-3 border w-50 m-auto text-center my-3 rounded ">
        <a href="{{ route('Prophets_create') }}" class="btn btn-success ">{{ trans('Prophets/Prophets.add') }}</a>
    </div>

    <div class="accordion accordion-flush " id="accordionFlushExample">
        <div class="accordion-item m-auto border rounded"  style="width: 90%;">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed collapsed-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                {{ trans('Prophets/Prophets.Old_Testament_prophetess') }}
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample" style="margin-bottom: -21px;">
                @include('prophets.index.prophetess.prophetess')
            </div>
        </div>

        <div class="accordion-item m-auto border rounded my-3"  style="width: 90%;">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed collapsed-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo" aria-expanded="false" aria-controls="flush-collapsetwo">
                {{ trans('Prophets/Prophets.Old_Testament_prophets') }}
                </button>
            </h2>
            <div id="flush-collapsetwo" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample" style="margin-bottom: -21px;">
                @include('prophets.index.prophets.prophets')
            </div>
        </div>
    </div>


@endsection