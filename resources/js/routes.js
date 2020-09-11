import Dashboard from './components/pages/Dashboard.vue';

import User_management from './components/pages/User_management.vue';


 
export const routes = [
    {
        name: 'dashboard',
        path: '/',
        component: Dashboard
    },
    {
      name: 'dashboard',
      path: '/Dashboard',
      component: Dashboard
  },
    {
      name: 'user_management',
      path: '/User_management',
      component: User_management
  },
];