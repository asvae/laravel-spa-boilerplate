var elixir = require('laravel-elixir')
require('laravel-elixir-webpack-ex')

elixir(function (mix) {
    // mix.webpack('main.js')
    // mix.webpack('api-tester.js', {}, 'app/ApiTester/resources/assets/build', 'app/ApiTester/resources/assets/js' )
    mix.webpack('api-tester.js', {}, null, 'app/ApiTester/resources/assets/js')
    mix.version([
        'public/js/api-tester.js'
    ])
});
