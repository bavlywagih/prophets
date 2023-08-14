@extends('template.template')
@section('content')
    @if ($user->id != Auth()->id() && Auth()->user()->role != 1 )

        <script type="text/javascript">
            window.location = " {{ route('Setting', Auth()->id()) }}";
        </script>

    @else
        
        <div class="col-md-8 w-75  p-5 m-auto profile-card-div-media">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class=" text-center p-3 w-75 m-auto border-bottom">
                            <h6 class="mb-0">{{ trans('setting/setting_trans.setting') }} </h6>
                        </div>

                    </div>
                    <form action="{{route('Setting_update' , $user->id )}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                                <div class="w-25 text-end text-start-setting-ltr">
                                    <h6 class="mb-0"> {{ trans('setting/setting_trans.username_arabic') }} </h6>
                                </div>
                                <div class=" text-secondary   w-75 text-end">
                                        <input type="text" name="name_arabic" value="{{ $user->name_arabic }}" class="form-control text-start-setting-ltr input-end-setting-rtl" placeholder="{{ trans('setting/setting_trans.username_arabic') }}" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    
                        <div class="card-body">
                            <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                                <div class="w-25 text-end text-start-setting-ltr">
                                    <h6 class="mb-0"> {{ trans('setting/setting_trans.username') }} </h6>
                                </div>
                                <div class=" text-secondary   w-75 text-end">
                                        <input type="text" name="name" value="{{ $user->name }}" class="form-control text-start-setting-ltr input-end-setting-rtl" placeholder="{{ trans('setting/setting_trans.username') }}" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                                <div class="w-25 text-end text-start-setting-ltr">
                                    <h6 class="mb-0"> {{ trans('setting/setting_trans.email') }} </h6>
                                </div>
                                <div class=" text-secondary text-start-setting-ltr  w-75 text-end">
                                    <input type="text" name="email" value="{{ Auth()->user()->email }}" class="form-control text-start-setting-ltr input-end-setting-rtl" placeholder="{{ trans('setting/setting_trans.email') }}" aria-label="email" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                                <div class="w-25 text-end text-start-setting-ltr">
                                    <h6 class="mb-0"> {{ trans('setting/setting_trans.password') }} </h6>
                                </div>
                                <div class=" text-secondary text-start-setting-ltr  w-75 text-end">
                                    <input type="password" name="password"  class="form-control text-start-setting-ltr input-end-setting-rtl" placeholder="{{ trans('setting/setting_trans.place_password') }}" aria-label="password" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-50">Success</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    
    @endif

@endsection
