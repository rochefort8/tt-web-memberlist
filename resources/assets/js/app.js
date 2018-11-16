
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import MembersView from './components/members/MembersView.vue';
import MembersIndex from './components/members/MembersIndex.vue';
import MembersCreate from './components/members/MembersCreate.vue';
import MembersEdit from './components/members/MembersEdit.vue';

const routes = [
    {
        path: '/',
        components: {
            membersIndex: MembersIndex
        }
    },
    {path: '/admin/members/view/:id', component: MembersView, name: 'viewMember'},
    {path: '/admin/members/create', component: MembersCreate, name: 'createMember'},
    {path: '/admin/members/edit/:id', component: MembersEdit, name: 'editMember'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
