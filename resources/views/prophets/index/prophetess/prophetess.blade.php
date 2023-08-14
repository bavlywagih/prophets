    @if (App::getlocale() == 'ar')
        <div class="m-auto p-3  d-grid  " style="width: 90%; grid-template-columns: repeat(3, 1fr); padding: 2rem !important;">
            @foreach ($prophetess as $prophetes)
                <a href="{{ route('Prophet_show', $prophetes->id ) }}" class="card  mx-3 align-items-end text-decoration-none my-3" >
                    <div class="card-body">
                        {{ $prophetes->name_arabic }}
                            النبية
                    </div>            
                    <div class="card-body">
                        <span class="text-muted">
                            .... {{substr($prophetes->meaning_name_arabic, 0, 55)}} 
                        </span>
                    </div>
                </a>

                @endforeach
        </div>
    @else
        <div class="m-auto d-grid" style="width: 90%; grid-template-columns: repeat(3, 1fr); padding: 2rem !important;">
            @foreach ($prophetess as $prophetes)
                <a href="{{ route('Prophet_show', $prophetes->id ) }}" class="card  mx-3 align-items-end text-decoration-none my-3 d-block" >
                    <p class="card-body">
                        {{ $prophetes->name_english }}
                            prophetess
                    </p>            
                    <div class="card-body">
                        <span class="text-muted">
                        {{substr($prophetes->meaning_name_english, 0, 50)}} .....
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    @endif