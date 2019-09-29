import Vue from 'vue';
import Router from 'vue-router';
import Login from '../login/Login';
import Main from '../main/Main';
import Zhu from '../zhu/Zhu';

Vue.use(Router)

export default new Router({
	routes:[
		{
            path:'/',
            component:Login
        },
        {
            path:'/main',
            component:Main,
            name:'main'
        },
        {
            path:'/zhu',
            component:Zhu,
            name:'zhu'
        }
	]
})