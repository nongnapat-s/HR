
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('panel-component', require('./components/PanelComponent.vue'));
Vue.component('input-text', require('./components/InputTextComponent.vue'));
Vue.component('input-button',require('./components/InputButtonComponent.vue'));
Vue.component('input-radio',require('./components/InputRadioButtonComponent.vue'));
Vue.component('pikaday',require('./components/PikadayComponent.vue'));
const app = new Vue({
    el: '#app',
    data : {
        ref_id : '',
        title_name : '',
        thai_name : '',
        english_name : '',
        nickname : '',
        date_of_birth : '',
        age : '',
        gender : false,
        race : '',
        nationality:'',
    },
    methods: {
        submit_form: function (event) {
            console.log(this.ref_id)
            console.log(this.title_name)
            console.log(this.thai_name)
            console.log(this.english_name)
            console.log(this.gender)
        }
    }

});
