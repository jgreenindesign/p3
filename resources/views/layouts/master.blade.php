<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists --}}
        @yield('title',"Developer's Best Friend")
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/style.css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the head --}}
    @yield('head')

</head>
<body>

    <div class="container">

        <header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav">
                            <li>
                                <a href='/'>
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li><a href='/lorem-ipsum'>Lorem Ipsum Generator</a></li>
                            <li><a href='/user'>Random User Generator</a></li>
                        </ul>

                    </div>

                </div>
            </nav>

        </header>

        <section>
            {{-- Yield page content --}}
            @yield('content')
        </section>

        <div class="clearfix"></div>

        <footer>
            &copy; Greenindesign {{ date('Y') }}
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        {{-- Yield any information at the end of the page --}}
        @yield('js-footer')
    </div>

</body>
</html>