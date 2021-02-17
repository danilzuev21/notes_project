import VueRouter from 'vue-router';
import Vue from 'vue';

import Notes from './components/Notes';
import EditNote from './views/EditNote';
import AddNote from './views/AddNote';


Vue.use(VueRouter);

export default new VueRouter({
  routes:[
    {
      path: '/',
      component: Notes
    },
    {
      path: '/note/:id',
      component: EditNote
    },
    {
      path: '/add_note',
      component: AddNote
    }
  ],
  mode: 'history'
})
