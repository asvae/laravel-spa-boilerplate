import './plugins/env'
import './plugins/globals'
import './plugins/vue-api-install'
import './vuex/vuex-install'

import Vue from 'vue'
import store from './vuex/store.js'
import router from './vue/router/router.js'

let app = Vue.extend({
    store,
})
router.start(app, '#app')

