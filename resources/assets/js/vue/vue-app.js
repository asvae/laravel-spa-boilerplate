// Vue app root file.

import './plugins/vue-api-install.js'
import './vuex/vuex-install.js'

import Vue from 'vue'
import store from './vuex/store.js'
import router from './router/router.js'

let app = Vue.extend({
    store,
})
router.start(app, '#app')