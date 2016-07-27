import $ from 'jquery'

window.ENV = {
    debug: !!$('meta[name=debug]').length,
    language: $('meta[name=language]').prop('content'),
    token: $('meta[name=token]').prop('content'),
}