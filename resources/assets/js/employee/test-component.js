require('../bootstrap')

import app from "../components/employee/TestComponent.vue"

window.app = new Vue({
    el: '#app',
    components: {
        app
    },
    data() {
        return {
            ref_id : ''
        }
    }
})
