
<!doctype html>
<html class="no-js" lang="zxx">
<!-- index28:48-->
<head>
        @include('client.share.head-css')
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <div class="body-wrapper">
            <header>
                @include('client.share.top')
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @yield('content')

                    <!-- gg map -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.5212581183214!2d108.20755351465125!3d16.059941588886666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b4239d8e51%3A0x96e408c6b0419760!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBEdXkgVMOibg!5e1!3m2!1svi!2s!4v1640195307554!5m2!1svi!2s" style="border-radius: 5px 5px 5px 5px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <br>
            @include('client.share.footer')
        </div>
        @include('client.share.foot-css')
        @yield('js')
    </body>
</html>
