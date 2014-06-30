<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') &middot; Nexus Fleet Management</title>

        {{ HTML::style('assets/css/main.css') }}
    </head>
    <body>
        <!-- MAIN CONTAINER -->
        <div id="container">

        <!-- MAIN HEADER -->
        <div id="headwrapper">
            {{ HTML::image('assets/images/lf-banner.jpg', 'Lambda Fleet Banner') }}
        </div>

        <!-- MENU UNDER HEADER -->
        <div id="main_nav">
            @include('layouts.mainmenu')
        </div>

        <!-- MAIN CONTENT DISPLAY -->
            <div id="main_body">
                <div class="sub_nav">
                    @if ($page_class)
                        @include('partials.subnav')
                    @else
                        {{'The page class has not been set.'}}
                    @endif
                </div>
                <div class="command_menu">
                    Command Menu/Login
                </div>
                <div class="content">
                    @yield('body')
                </div>
            </div>

            <!-- FOOTER -->
            <div id="footer">
                <div class="copyright">
                    &copy;{{ date('Y') }} &nbsp;all rights reserved&nbsp;|&nbsp;Powered by LAMBDA&nbsp;|&nbsp;{{ HTML::linkAction('credits','Site Credits') }}
                </div>
            </div>

        </div> <!-- END MAIN CONTAINER -->
    </body>
</html>
