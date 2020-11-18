import AllBooks from './components/book/index.vue';
import EditBooks from './components/book/edit';
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllBooks
    },
    {
        name: 'edit',
        path: '/:id',
        component: EditBooks
    }
];
