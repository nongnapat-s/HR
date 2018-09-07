<template>
<vue-bootstrap-typeahead
    :data="['apple', 'banana', 'coconut']"
    v-model="value"
></vue-bootstrap-typeahead>
</template>

<script>
import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'
export default {
components: {
    VueBootstrapTypeahead
},
data () {
    return {
        value: null,
        data: ['apple', 'banana', 'coconut']
    }
}
}
</script>