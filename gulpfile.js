var elixir = require('laravel-elixir')

elixir(function (mix) {
    mix.sass('app.scss')

    mix.browserify('app.js')

    mix.version(['js/app.js', 'css/app.css'])
});

