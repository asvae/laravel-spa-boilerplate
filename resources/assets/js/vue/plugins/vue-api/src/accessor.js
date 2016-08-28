import Vue from 'vue'
import _ from 'lodash'

export default new Vue({
    data (){
        return {
            options: {
                // Synchronous route, second one will be blocked.
                sync: [],
                // Routes to warn from config
                warn: {},
                // This creates a response query so that only one could be running at
                // any given moment, yet the last scheduled response will always run.
                // Useful for live search and such. When race condition is inappropriate.
                hold: [],
            },
            // Current warned routes (closures)
            urlsToWarn: [],
            holdenRoutes: {},
            activeUrls: {},
        }
    },
    methods: {
        isActive(url){
            // Might be undefined so we convert to boolean
            return this.activeUrls[url] ? true : false
        },
        warn(route, confirm){
            let warn = {
                route,
                message: this.options.warn[route],
                confirm,
            }
            this.urlsToWarn.push(warn)
        },
        requiresWarn(url){
            return this.warn[url] ? true : false
        },
        requiresHold(url){
            return _.includes(this.hold, url)
        },
        isSync(url){
            return _.includes(this.options.sync, url)
        },
        getEmptyPromise() {
            return {
                then: () => this,
                catch: () => this,
            }
        }
    }
})