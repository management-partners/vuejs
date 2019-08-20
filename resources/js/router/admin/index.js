import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../../components/admin/Dashboard'
import Sidebar from '../../components/admin/common/Sidebar'
import MainMenu from '../../components/admin/common/Menu'
import Skin from '../../components/admin/common/Skin'
import Breadcrumb from '../../components/admin/common/Breadcrumbs'

import LanguageList from '../../components/admin/language/List'
import LanguageAdd from '../../components/admin/language/Add'
import UserList from '../../components/admin/user/List'
import UserAdd from '../../components/admin/user/Add'

Vue.use(Router)

Vue.component('dashboard-menu', MainMenu)
Vue.component('dashboard-sidebar', Sidebar)
Vue.component('dashboard-skin', Skin)
Vue.component('dashboard-breadcrumb', Breadcrumb)

export default new Router({
    hashbang: false,
    mode: 'history',
    linkActiveClass: "active",
    root: '/admin/',
    routes: [{
            path: '/admin/',
            name: 'Dashboard',
            component: Dashboard,
            // children: [
            //   {
            //     path: 'language',
            //     component: LanguageList,
            //     name: 'LanguageList'
            //   },
            //   {
            //     path: 'language/add',
            //     component: LanguageAdd,
            //     name: 'LanguageAdd'
            //   }
            // ]
        },
        {
            path: '/admin/lang',
            name: 'LanguageList',
            component: LanguageList
        },
        {
            path: '/admin/lang/add',
            name: 'LanguageAdd',
            component: LanguageAdd
        },
        {
            path: '/admin/user',
            name: 'UserList',
            component: UserList
        },
        {
            path: '/admin/user/add',
            name: 'UserAdd',
            component: UserAdd
        },
        // {
        //   path: '/login',
        //   name: 'Login',
        //   component: Login
        // },
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
