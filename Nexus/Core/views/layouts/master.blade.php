<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') &bull; Nexus Fleet Management</title>
        <meta name="viewport" content="width=device-width">

        <!--[if lt IE 9]>
            {{ HTML::script('assets/js/html5shiv.js') }}
		<![endif]-->

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,300,700">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Exo+2:200,400,600">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        {{ HTML::style('assets/css/main.css') }}
        {{ HTML::style('assets/css/bootstrap-changes.css') }}
        @yield('styles')
    </head>
    <body>
        <div class="container">
            <header>
                {{ HTML::image('assets/images/site-banner.jpg', 'Fleet Banner') }}
            </header>

            @include('partials.nav-main')

            <div class="row">
                <div class="col-lg-2">
                    @if ($page_class)
                        @include('partials.nav-sub')
                    @else
                        <p class="alert alert-warning">The page class has not been set!</p>
                    @endif
                </div>
                <div class="col-lg-8">
                    <section>
                        @yield('body')
                    </section>
                </div>
                <div class="col-lg-2">
                    @include('partials.nav-command')
                </div>
            </div>

            <footer>
                &copy;{{ date('Y') }} All Rights Reserved |
                Powered by {{ HTML::image('assets/images/poweredby.jpg', 'Nexus Fleet System') }} |
                {{ HTML::linkAction('credits','Site Credits') }}
            </footer>
        </div>

        <!--[if lt IE 9]>
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
			<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        @yield('scripts')
    </body>
</html>
