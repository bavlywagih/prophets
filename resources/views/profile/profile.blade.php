@extends('template.template')
@section('content')

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
                        <span>{{ trans('profile/profile_trans.name') }}</span>
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
                        <span>{{ trans('profile/profile_trans.the_condition') }}</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
