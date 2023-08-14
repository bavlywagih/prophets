@extends('template.template')
@section('content')
    @if ($user->id != Auth()->id() && Auth()->user()->role != 1 )

        <script type="text/javascript">
            window.location = " {{ route('Profile', Auth()->id()) }}";
        </script>

    @else

        @if (App::getlocale() == 'ar')

            @if ($user->role != 0) 
                @php
                    $condition = 'مشرف'
                @endphp
            @else
                @php
                    $condition = 'مستخدم'
                @endphp
            @endif

            @php
                $name = $user->name_arabic
            @endphp

        @else

            @if ($user->role != 0) 
                @php
                    $condition = 'admin'
                @endphp
            @else
                @php
                    $condition = 'user'
                @endphp
            @endif

            @php
                $name = $user->name
            @endphp

        @endif



        <div class="col-md-8 w-75  p-5 m-auto profile-card-div-media">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class=" text-center p-3 w-75 m-auto border-bottom">
                            <h6 class="mb-0">{{ trans('profile/profile_trans.profile') }} </h6>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="d-flex flex-row-reverse justify-content-around div-profile-ltr">
                            <div class="w-25 text-end text-start-profile-ltr">
                                <h6 class="mb-0"> {{ trans('profile/profile_trans.username') }} </h6>
                            </div>
                            <div class=" text-secondary text-start-profile-ltr  w-75 text-end">
                                <span>{{ $name }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex flex-row-reverse justify-content-around div-profile-ltr">
                            <div class="w-25 text-end text-start-profile-ltr">
                                <h6 class="mb-0"> {{ trans('profile/profile_trans.email') }} </h6>
                            </div>
                            <div class=" text-secondary text-start-profile-ltr  w-75 text-end">
                                <span>{{ Auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex flex-row-reverse justify-content-around div-profile-ltr">
                            <div class="w-25 text-end text-start-profile-ltr">
                                <h6 class="mb-0"> {{ trans('profile/profile_trans.condition') }} </h6>
                            </div>
                            <div class=" text-secondary text-start-profile-ltr  w-75 text-end">
                                <span>{{ $condition }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endif
@endsection
