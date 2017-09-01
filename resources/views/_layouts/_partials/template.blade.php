<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>@yield('title') | {{ $siteTitle }} Docs</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/elegant_font/css/style.css') }}">

    <!-- Theme CSS -->
    <style>
        pre {
            all: unset;
        }
    </style>
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/plugins/highlight/styles/agate.css') }}">
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- Package CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/' . $package . '.styles.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
@include('_partials.analytics')
<div class="page-wrapper">

    <!-- ******Header****** -->
    <header id="header" class="header">
        <div class="container">
            <div class="branding">
                <div class="col-md-6">
                    <h1 class="logo">
                        <a href="{{ url('/') }}" data-toggle="tooltip" title="Back to home" data-placement="bottom">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a href="/laravel-modules">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">{{ $package }}</span>
                        </a>
                        @if (count($versions) > 1)
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $version }} <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach($versions as $v)
                                        <li class="{{ $version === $v ? 'active' :'' }}">
                                            <a href="/{{ $package }}/{{ $v }}">
                                                v{{ substr($v, 1) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </h1>
                </div>
                <div class="col-md-6 header_logos">
                    <a href="{{ $githubUrl }}" target="_external">
                        @include('_partials.svg.github')
                    </a>
                </div>
            </div><!--//branding-->
        </div><!--//container-->
    </header><!--//header-->
    <div class="doc-wrapper">
        <div class="container">
            <div class="doc-body">
                <div class="col-md-3">
                    <nav id="doc-nav">
                        {!! menu() !!}
                    </nav>
                </div>
                <div class="col-md-9">
                    <div class="content-inner doc-content">
                        @yield('content')

                        @include('_partials.pagination')
                    </div><!--//content-inner-->
                    @include('_partials.toolbar')
                </div>
            </div>
        </div>
    </div>
</div><!--//page-wrapper-->

<footer class="footer text-center">
    <div class="container">
        <small class="copyright">
            Nicolas Widart | Documentation app by <a href="https://spatie.be" target="_blank">Spatie</a>
            | Designed by
            <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a>
        </small>
    </div><!--//container-->
</footer><!--//footer-->


<!-- Main Javascript -->
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-1.12.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/highlight/highlight.pack.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-match-height/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    $( document ).ready(function() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });
</script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
