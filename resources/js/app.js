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
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('component-login', require('./components/LoginComponent.vue').default);
Vue.component('component-registration', require('./components/RegistrationComponent.vue').default);
Vue.component('component-appointment', require('./components/AppointmentComponent.vue').default);
Vue.component('component-officer', require('./components/OfficerComponent.vue').default);
Vue.component('component-fee', require('./components/FeeComponent.vue').default);
Vue.component('component-doctor', require('./components/DoctorComponent.vue').default);
Vue.component('component-patient', require('./components/PatientComponent.vue').default);
Vue.component('component-medical', require('./components/MedicalComponent.vue').default);
Vue.component('component-letter', require('./components/LetterComponent.vue').default);
Vue.component('component-supplier', require('./components/SupplierComponent.vue').default);
Vue.component('component-treatment', require('./components/TreatmentComponent.vue').default);
Vue.component('component-item', require('./components/ItemComponent.vue').default);
Vue.component('component-diagnosis', require('./components/DiagnosisComponent.vue').default);
Vue.component('component-billing', require('./components/BillingComponent.vue').default);

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
