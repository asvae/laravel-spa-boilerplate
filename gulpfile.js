var elixir = require('laravel-elixir')

elixir(function (mix) {
    mix.sass('app.sass')

    // mix.scripts([], 'public/js/vendor.js')

    mix.browserify('app.js')

    mix.version(['js/app.js', 'js/vendor.js', 'css/app.css'])
});

