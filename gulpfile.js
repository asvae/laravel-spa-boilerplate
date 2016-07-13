var elixir = require('laravel-elixir')
require('laravel-elixir-webpack-ex')

elixir(function(mix) {
    mix.webpack('main.js')
    // mix.sass('app.scss')
});
