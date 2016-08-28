import vmTestRoute from '../components/test-route.vue'
export default {
    'route': {
        component: vmTestRoute,
        subRoutes: {
            '/subroutes': {component: vmTestRoute},
        }
    },
    '*': {
        component: vmTestRoute,
    },
}