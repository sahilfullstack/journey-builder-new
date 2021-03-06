/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('selectable-card', require('./components/SelectableCard.vue'));
Vue.component('selectable-item', require('./components/SelectableItem.vue'));
Vue.component('journey', require('./components/JourneyComponent.vue'));
Vue.component('node', require('./components/Node.vue'));
Vue.component('linker--select-many', require('./components/LinkerSelectMany.vue'));
Vue.component('linker--select-one', require('./components/LinkerSelectOne.vue'));
Vue.component('linker--text', require('./components/LinkerText.vue'));
Vue.component('linker--number', require('./components/LinkerNumber.vue'));
Vue.component('linker--full-name', require('./components/LinkerFullName.vue'));
Vue.component('linker--date', require('./components/LinkerDate.vue'));
Vue.component('linker--weight', require('./components/LinkerWeight.vue'));
Vue.component('linker--height', require('./components/LinkerHeight.vue'));
Vue.component('linker--months', require('./components/LinkerMonths.vue'));

/**
 * Icons
 */
import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { faChevronLeft, faChevronRight, faCheckCircle, faAngleDoubleLeft, faAngleDoubleRight } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

dom.watch();
library.add(
	faChevronLeft,
	faChevronRight,
	faCheckCircle,
	faAngleDoubleLeft,
	faAngleDoubleRight,
)
Vue.component('font-awesome-icon', FontAwesomeIcon)

const app = new Vue({
    el: '#app'
});
