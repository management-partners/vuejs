/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
import Vue from 'vue';
import Admin from './Admin.vue';
import VueI18n from 'vue-i18n';

import router from './router/admin';
import i18n from './plugins/i18n';
import {
    library
} from '@fortawesome/fontawesome-svg-core'
import {
    fas
} from '@fortawesome/free-solid-svg-icons'
import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome'

library.add(fas)

Vue.component('awesome-icon', FontAwesomeIcon)


window.Vue = require('vue');


/* ここまで */

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.config.productionTip = false;
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#admin',
    router,
    i18n,
    components: {
        Admin
    },
    template: '<Admin/>'
});
