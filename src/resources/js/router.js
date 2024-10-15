import Vue from 'vue';
import Router from 'vue-router';
import EmployeeIndex from './pages/Employee/Index.vue'
import EmployeeCreate from './pages/Employee/Create.vue'
import EmployeeEdit from './pages/Employee/Edit.vue'
import ClientIndex from './pages/Client/Index.vue'
import ClientCreate from './pages/Client/Create.vue'
import ClientEdit from './pages/Client/Edit.vue'
import WorkplaceIndex from './pages/Workplace/Index.vue'
import WorkplaceCreate from './pages/Workplace/Create.vue'
import WorkplaceEdit from './pages/Workplace/Edit.vue'
import TaskAssignIndex from './pages/TaskAssign/Index.vue'
import TaskAssignCreate from './pages/TaskAssign/Create.vue'
import TaskAssignEdit from './pages/TaskAssign/Edit.vue'

Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/employee',
      name: 'employee',
      component: EmployeeIndex,
      props: true,
    },
    {
      path: '/employee/create',
      name: 'employeeCreate',
      component: EmployeeCreate,
      props: true,
    },
    {
      path: '/employee/edit/:id',
      name: 'employeeEdit',
      component: EmployeeEdit,
      props: true,
    },
    {
      path: '/client',
      name: 'client',
      component: ClientIndex,
      props: true,
    },
    {
      path: '/client/create',
      name: 'clientCreate',
      component: ClientCreate,
    },
    {
      path: '/client/edit/:id',
      name: 'clientEdit',
      component: ClientEdit,
      props: true,
    },
    {
      path: '/workplace',
      name: 'workplace',
      component: WorkplaceIndex,
      props: true,
    },
    {
      path: '/workplace/create',
      name: 'workplaceCreate',
      component: WorkplaceCreate,
    },
    {
      path: '/workplace/edit/:id',
      name: 'workplaceEdit',
      component: WorkplaceEdit,
      props: true,
    },
    {
      path: '/task_assign',
      name: 'taskAssign',
      component: TaskAssignIndex,
      props: true,
    },
    {
      path: '/task_assign/create',
      name: 'taskAssignCreate',
      component: TaskAssignCreate,
    },
    {
      path: '/task_assign/edit/:id',
      name: 'taskAssignEdit',
      component: TaskAssignEdit,
      props: true,
    },
    {
      path: '/*',
      component: () => import('./pages/NotFound.vue'),
      
    },
  ],
})