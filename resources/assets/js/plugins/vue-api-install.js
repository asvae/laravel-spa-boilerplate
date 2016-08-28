import Vue from 'vue'
import asvaApi from './vue-api/vue-api.js'

let options = {
    sync: [
        // 'route/name
    ],
    warn: {
        // 'route/name': 'Message'
    },
    hold: [
        // 'route/name
    ]
}

Vue.use(asvaApi, options)

