import VueRouter from 'vue-router'
import routes from './routes'
import './router-installer'

var router = new VueRouter({history: true});
export default router.map(routes)
