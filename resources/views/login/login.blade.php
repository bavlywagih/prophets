@extends('template.template')
@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="{{ route('login_post') }}" method="POST" >
                                @csrf

                                 <div class="mb-md-5 mt-md-4 pb-4">
                                    <div class="py-4">
                                        <h2 class="fw-bold mb-2 text-uppercase">{{ trans('login/login_trans.login') }}</h2>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label login_label_ltr_trans login_label_rtl_trans" for="email">{{ trans('login/login_trans.email') }}</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg"  />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label justify-content-between  login_label_ltr_trans login_label_rtl_trans" for="password">{{ trans('login/login_trans.password') }}</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                    </div>

                                    <div class="d-flex align-items-center  mb-3 login_div_rtl_trans ">
                                        <div class="d-flex ">
                                          <div class="form-check login_form_check_rtl_trans">
                                            <input class="form-check-input " name="remember" type="checkbox" value="1" id="remember" checked/>
                                            <label class="form-check-label login_label_check_rtl_trans" for="remember">{{ trans('login/login_trans.remember') }}</label>
                                          </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">{{ trans('login/login_trans.submit') }}</button>

                                </div>
                            </form>

                          <div>
                            <p class="mb-0">{{ trans('login/login_trans.Dont_have_account') }}<a href="{{ route('register_view') }}" class=" fw-bold text-light text-decoration-none">{{ trans('login/login_trans.Create_account_from_here') }}</a></p>
                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
