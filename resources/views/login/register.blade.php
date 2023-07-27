@extends('template.template')
@section('content')
<section class=" mt-3">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card mb-3 " style="border-radius: 15px;">
                        <div class="card-body p-5">
                          <h2 class="text-uppercase text-center mb-5 ">{{ trans('login/register_trans.register')}}</h2>

                            <form action="{{ route('register') }}" method="POST" >

                                @csrf

                                <div class="form-outline mb-4 text-end">
                                    <label class="form-label register_label_trans_ltr " for="name">{{ trans('login/register_trans.name')}}</label>
                                    <input type="text" id="name" class="form-control form-control-lg" name="name" />
                                </div>

                                <div class="form-outline mb-4 text-end">
                                    <label class="form-label register_label_trans_ltr " for="name_arabic">{{ trans('login/register_trans.name_arabic')}}</label>
                                    <input type="text" id="name_arabic" class="form-control form-control-lg" name="name_arabic" />
                                </div>
                              
                                <div class="form-outline mb-4 text-end">
                                    <label class="form-label register_label_trans_ltr " for="email">{{ trans('login/register_trans.email')}}</label>
                                    <input type="email" id="email" class="form-control form-control-lg" name="email" />
                                </div>
                              
                                <div class="form-outline mb-4 text-end">
                                    <label class="form-label register_label_trans_ltr " for="password">{{ trans('login/register_trans.password')}}</label>
                                    <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                </div>
                              
                                <div class="form-outline mb-4 text-end">
                                    <label class="form-label register_label_trans_ltr " for="Password_Confirmation">{{ trans('login/register_trans.password_confirmation')}}</label>
                                    <input type="password" id="Password_Confirmation" class="form-control form-control-lg" name="password_confirmation" />
                                </div>
                              
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success w-75">{{ trans('login/register_trans.create')}}</button>
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label" for="remember">{{ trans('login/register_trans.remember')}}</label>
                                    <input class="form-check-input" name="remember" type="checkbox" value="1" id="remember" checked/>
                                </div>
                              
                                <p class="text-center text-muted mt-5 mb-0">{{ trans('login/register_trans.have_account')}} <a href="{{ route('login') }}"class="fw-bold text-body"><u>{{ trans('login/register_trans.Login_here')}}</u></a></p>
                            
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection