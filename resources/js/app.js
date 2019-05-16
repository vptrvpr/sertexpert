
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/QuestionsSectionComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Pages
 */
Vue.component('index-component', require('./components/pages/IndexComponent.vue').default);
Vue.component('news-component', require('./components/pages/NewsComponent').default);
Vue.component('about-component', require('./components/pages/AboutComponent').default);
Vue.component('contacts-component', require('./components/pages/ContactsComponent').default);
Vue.component('article-component', require('./components/pages/ArticleComponent.vue').default);
Vue.component('questions-component', require('./components/pages/QuestionsComponent.vue').default);
Vue.component('search-component', require('./components/pages/SearchComponent.vue').default);


/**
 * Layouts
 */
Vue.component('header-component', require('./components/layouts/HeaderComponent').default);
Vue.component('footer-component', require('./components/layouts/FooterComponent').default);
Vue.component('questions-section-component', require('./components/layouts/QuestionsSectionComponent').default);
Vue.component('questions-section-2-component', require('./components/layouts/QuestionsSection2Component.vue').default);


/**
 * Admin
 */
Vue.component('create-article-component', require('./components/admin/pages/CreateArticleComponent.vue').default);
Vue.component('list-articles-component', require('./components/admin/pages/ListArticlesComponent.vue').default);
Vue.component('admin-question-component', require('./components/admin/pages/ListQuestionsComponent.vue').default);
Vue.component('admin-contact-component', require('./components/admin/pages/ContactsComponent.vue').default);

/**
 * Admin layouts
 */
Vue.component('admin-navbar-component', require('./components/admin/layouts/AdminNavbarComponent.vue').default);
Vue.component('admin-sidebar-component', require('./components/admin/layouts/AdminSidebarComponent.vue').default);


/**
 * Assets
 */
Vue.component('editor', require('@tinymce/tinymce-vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
