import accessor from './src/accessor.js'
import _ from 'lodash'
import Api from './src/Api.js'

export default function (Vue, options) {
    if (options){
        accessor.options = _.defaults(options, accessor.options)
    }
    Object.defineProperties(Vue.prototype, {
        $api: {
            get () {
                return new Api(this)
            }
        },
        $activeActions: {
            get: () =>  accessor.activeUrls
        },
        $accessor: {
            get: () => accessor
        },
    })
}