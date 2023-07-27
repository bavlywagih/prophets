    <div class="p-3 bg-dark text-white proph">
        <div class="flexMain">
            <div class="flex2 text-center">
                <div><strong id="smallname"><a href="{{ $index }}" class="text-light text-decoration-none">{{ $sequence_prophets }}</a></strong></div>
            </div>
        </div>
    </div>


    <div id="menuHolder" class="sticky-top">
        <div role="navigation" class="sticky-top border-bottom border-top mainNavigation_navbar_rtl" id="mainNavigation">
            <div class="flexMain flex_main_navbar_rtl">

              <div class="flex2 flex_end_navbar_rtl">
                <button class="whiteLink siteLink d-flex flex-row-reverse d-flex align-items-center  " style="border-right:1px solid #eaeaea" onclick=" menuToggle() ">
                    <div class="d-flex flex-row-reverse flex_reverse_navbar_rtl ">
                        <div>{{ $menu }}</div><div class="ps-2"><i class="fas fa-bars me-2"></i></div>
                    </div>
                </button>
              </div>

              <div class="flex2 text-end d-none d-sm-flex flex_drop_navbar_rtl flex_drop_navbar_ltr">
                @auth
                    <div class="btn-group  ">
                        <button type="button" class="btn btn-danger dropdown-toggle bg-white text-dark border-light" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $AuthName }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-end " href="{{$profile}}">{{ trans('navbar/navbar_trans.profile') }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-end" href="{{ route('Setting') }}">{{ trans('navbar/navbar_trans.settings') }}</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-end" href="{{ $logout }}">{{ trans('navbar/navbar_trans.logout') }}</a></li>
                        </ul>
                    </div>
                @else 
                    <a href="{{ $register }}"  class="text- d-none d-sm-block text-decoration-none"><button class="whiteLink siteLink"> {{ trans('navbar/navbar_trans.register') }} </button></a>
                    <a href="{{ $login }}" class="text-light d-none d-sm-block text-decoration-none"> <button class="blackLink siteLink">{{ trans('navbar/navbar_trans.login') }}</button></a>
                @endauth
              </div>

            </div>
        </div>

        <div id="menuDrawer" class="menuDrawer_navbar_rtl">
            <div class="p-4 border-bottom">

                <div class='row navbar_panel_rtl align-items-center'>
                    <div class="col">
                        <div class="dropdown navbar_dropdown_rtl">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (App::getlocale() == 'ar')
                                    العربية
                                @else
                                    english
                                @endif
                            </button>
                          <ul class="dropdown-menu">                         
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li><a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                            @endforeach
                          </ul>
                        </div>
                    </div>
                    <div class="col text-end navbar_times_rtl ">
                        <i class="fas fa-times " role="btn" onclick="menuToggle()"></i>
                    </div>
                </div>

            </div>

            <div>
                
                @auth
                    <div class="d-block d-md-none">
                        <a href="{{ route('index') }}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center "><div class="ps-3"></div>{{auth()->user()->name}}</a>
                    </div>
                @else    
                    <a href="{{ route('index') }}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center "><div class="ps-3"><i class="fas fa-home me-3"></i></div>{{ trans('navbar/navbar_trans.home') }}</a>
                @endauth
                @auth
                <a href="{{ $Prophets }}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center "><div class="ps-3"><i class="fa-solid fa-users me-3"></i></div> {{ trans('navbar/navbar_trans.old_testament_prophets') }} </a>
                <a href="#" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center "><div class="ps-3"><i class="fa-solid fa-phone-volume fa-flip-horizontal me-3"></i></div> {{ trans('navbar/navbar_trans.contact') }}</a>
                @endauth
                <div class="d-block d-md-none">
                    @guest
                        <a href="{{ route('register_view') }}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center"> <div class="ps-3"> <i class="fa-solid fa-user-plus me-3"></i> </div>{{ trans('navbar/navbar_trans.register') }}</a>
                        <a href="{{ route('login') }}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center"> <div class="ps-3"> <i class="fa-solid fa-arrow-right-to-bracket me-3"></i> </div> {{ trans('navbar/navbar_trans.login') }} </a>
                    @endguest
                    @auth
                    <a href="{{$profile}}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center"> <div class="ps-3"> <i class="fa-solid fa-address-card"></i> </div>الملف الشخصي</a>
                    <a href="{{ route('logout') }}" class="nav-menu-item d-flex flex-row-reverse d-flex align-items-center"> <div class="ps-3"> <i class="fa-solid fa-right-from-bracket"></i> </div>{{ trans('navbar/navbar_trans.logout') }}</a>

                    @endauth
                </div>
            </div>
        </div>
    </div>


    @section('script')
        <script>
          var menuHolder = document.getElementById('menuHolder')
          var siteBrand = document.getElementById('siteBrand')
          var smallname = document.getElementById('small-name')
          function menuToggle() {
              if (menuHolder.className === "drawMenu") menuHolder.className = "sticky-top"
              else menuHolder.className = "drawMenu"
          };
        </script>
    @endsection
