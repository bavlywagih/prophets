let mix = require('laravel-mix');

mix.minify(
    [
        "./resources/css/app.css",
        "./resources/css/bootstrap/bootstrap.min.css",
        "./resources/css/navbar/navbar.css",
        "./resources/css/index/index_page.css",
        "./resources/css/login/login.css",
        "./resources/css/prophets/prophet_show.css",
        "./resources/css/login/register.css",
        "./resources/css/login/forget-password.css",
        "./resources/css/media/index/index_page.css",
        "./resources/css/media/profile/profile_page.css",
        "./resources/css/media/prophet/show_prophet_page.css"
    ]
    , "./public/css/app.css"
);

mix.minify(
    [
        "./resources/css/rtl/navbar/navbar_rtl.css",
        "./resources/css/rtl/index/index_rtl.css",
        "./resources/css/rtl/login/login_rtl.css",
        "./resources/css/rtl/setting/setting_rtl.css",
        "./resources/css/rtl/prophets/prophet_rtl.css",
        "./resources/css/media/prophet/show_prophet_page_rtl.css"

    ]
    , "./public/css/rtl/app.css"
);

mix.minify(
    [
        "./resources/css/ltr/navbar/navbar_ltr.css",
        "./resources/css/ltr/index/index_ltr.css",
        "./resources/css/ltr/profile/profile_ltr.css",
        "./resources/css/ltr/login/register_ltr.css",
        "./resources/css/ltr/login/login_ltr.css",
        "./resources/css/ltr/setting/setting_ltr.css",
    ]
    , "./public/css/ltr/app.css"
);

mix.minify(
    [
        "./resources/css/print/print.css",
    ]
    , "./public/css/print/print.css"
);

mix.js(
    [
        "./resources/js/app.js",
        "./resources/js/font-awesome/all.min.js",
        "./resources/js/bootstrap/bootstrap.min.js",
        "./resources/js/navbar/navbar.js"
    ]
    , "./public/js/app.js"
);