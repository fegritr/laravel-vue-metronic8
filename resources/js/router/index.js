import { createWebHistory, createRouter } from "vue-router";

import Home from '../pages/Home';
import About from '../pages/About';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';
import DataBuku from '../pages/DataBuku';

import Books from '../pages/Books/Books'
import Category from '../pages/Category/Category'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'about',
        path: '/about',
        component: About
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'databuku',
        path: '/databuku',
        component: DataBuku
    },
    {
        name: 'books',
        path: '/books',
        component: Books
    },
    {
        name: 'category',
        path: '/category',
        component: Category
    },


];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
