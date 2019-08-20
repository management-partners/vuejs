import Vue from 'vue'
import Router from 'vue-router'
import Main from '../components/user/Main'

import MainMenu from '../components/user/Menu'

import Login from '../components/user/system/Login'
import Register from '../components/user/system/Register'



Vue.use(Router)

Vue.component('main-menu', MainMenu)

export default new Router({
  mode: 'history',
  hashbang: false,
  routes: [{
      path: '/',
      name: 'Main',
      component: Main,
    },
    {
      path: '/#/register',
      name: 'Register',
      component: Register
    },
    {
      path: '/#/login',
      name: 'Login',
      component: Login
    },
    // // this is admin area
    // {
    //   path: '/admin',
    //   name: 'admin',
    //   component: AdMain,
    //   // children: [{
    //   //   path: '/admin/language',
    //   //   name: 'language',
    //   //   component: AdLanguage
    //   // }]
    // },
    // {
    //     path: '/admin/language',
    //     name: 'language',
    //     component: AdLanguage
    // }
  ]
})
