@extends('base')

@section('body')
    <div class="container my-1">
        <div id="hero">
            <div class="inner">
                <div class="left">
                    <img class="hero-logo" src="/assets/images/hero-logo.png">
                </div><div class="right">
                    <h2>{{$siteName}}</h2>
                    <h1>
                        A reusable<br>set of components
                    </h1>
                    <p>
                        <a class="button" href="/docs/">GET STARTED</a>
                        <a class="button white" href="https://github.com/{{ config('github.vendor') }}" target="_blank">GITHUB</a>
                    </p>
                </div>
            </div>
        </div>

        <div id="highlights">
            <div class="inner">
                <div class="point">
                    <h2>Secure</h2>
                    <p>We intend to make all our components as secure as possible and keep them updated with security patches.</p>
                </div>

                <div class="point">
                    <h2>Simplicity</h2>
                    <p>Simple, with elegant syntax. We believe development must be an enjoyable, creative experience experience.</p>
                </div>

                <div class="point">
                    <h2>Supported</h2>
                    <p>Fistlab is officially supported by Ulties and all Github issues and repositories will be looked through.</p>
                </div>
            </div>
        </div>

        <div id="introduction">
            <div class="inner">

                @yield('content')

            </div>
        </div>
    </div>
@stop
