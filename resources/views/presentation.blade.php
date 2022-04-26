<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,700;1,400&family=Square+Peg&display=swap');
        </style>
        <link rel='icon' type='image/x-icon' href="{{ asset('img/favicon-laravel.png') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }} "/>
        <title>{{ $title }}</title>
        </style>
    </head>
    <body>
      <div class='main vf'>
        <div class='nav hf aic'>
          <div class='prof-pic'>
            <img class='profile-pic' src="{{ asset('img/pic.png') }}" width="150" height="150"/>
          </div>
            <ul class='nav-items'>
              <li class='nav-i'><a href="/person/presentation">Presentation</a></li>
              <li class='nav-i'><a href="/person/competences">Competences</a></li>
              <li class='nav-i'><a href="/person/trivial">Trivial</a></li>
            </ul>
            <div>
              <a href="mailto:dev.joejoh@gmail.com">Contact</a>
            </div>
        </div>
        <div class='pres-wrp'>
          <div class='pres-content'>
            <div class='pres-head vf aic'>
              <span>Joel<br />Johansen</span>
              <div class='logo hf air'>
                <img src="{{ asset('img/logo.png') }}">
                <div class="env-info">
                    <a href='https://laravel.com/' target='_blank'>Laravel v{{ Illuminate\Foundation\Application::VERSION }}</a>
                </div>
              </div>
            </div>
            <div class='pres-body'>
              <span class='ctx'><p>{{ $context }}</p></span>
              <p>{{ $content }}</p>
              <div style=border-bottom:5px solid #f55247></div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
