<?php

$language = null;
$version = null;
$versions = [];

$parts = explode('/', $currentUrlPath);

if (starts_with($currentUrlPath, 'docs/') && count($parts) >= 4) {
    $language = $parts[1];
    $version = $parts[2];
    $versions = collect(
        app(Illuminate\Filesystem\Filesystem::class)
            ->directories(__DIR__."/../docs/{$language}")
        )->map(function ($path) {
            return end(explode('/', $path));
        })->reverse()->all();
}

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">

    <title>@yield('pageTitle') {{$siteName}}</title>

    <link rel="stylesheet" href="@url('assets/css/app.css')">
</head>

<body>

<nav class="navbar navbar-light @if ($currentUrlPath !== '/') border-bottom @endif">
    <div class="container">
        <a class="navbar-brand" href="@url('/')">
            <img src="@url('assets/images/icon.png')" class="logo" alt="{{$siteName}}">
            {{ $siteName }}
        </a>

        @if (! is_null($language))
            <small class="navbar-language">
                <a href="{{ url("docs/{$language}") }}">{{ $language }}</a>
            </small>
        @endif

        <div>
            <div class="clearfix hidden-lg-up">
                <a role="button" class="navbar-toggler float-xs-right" data-toggle="collapse"
                   data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                   aria-label="Toggle navigation"></a>
            </div>
            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <ul class="nav navbar-nav float-lg-right">
                    <li class="nav-item">
                        <a class="nav-link @active('/')" href="https://fistlab.dev/">Home</a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link @active('blog')" href="https://fistlab.dev/blog">Blog</a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link @active('docs')" href="https://fistlab.dev/docs">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/fistlab" target="_blank">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @active('community')" href="https://fistlab.dev/community">Community</a>
                    </li>
                </ul>

                @if (! empty($versions))
                    <div id="switcher">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                {{ $version }}
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                @foreach ($versions as $branch)
                                    <li><a href="{{ url("docs/{$language}/{$branch}") }}">{{ $branch }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                @yield('extra-nav')
            </div>
        </div>
    </div>
</nav>

<div class="body" style="min-height: 70vh">
    @yield('body')
</div>

<div class="clearfix"></div>

<script src="@url('assets/js/app.js')" type="text/javascript"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXXXX-X', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
