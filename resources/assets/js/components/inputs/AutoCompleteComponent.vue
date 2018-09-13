<template>
    <div class="form-group col-xs-12">
         <input
            class="form-control"
            type="text"
            id="autocomplete"
            name="autocomplete"
            :value="value"
            :url = "url"
            ref="input" 
            @input = "Input"/>
    </div>
</template>

<script>
require("devbridge-autocomplete/dist/jquery.autocomplete.min.js");
export default {
    props: {
        label: { default: null },
        value: { required: true },
        url: { default: '' },
    },
    data () {
        return { lastSave: null }
    },
    mounted () {
        $('#' + this.$refs.input.name).autocomplete({
            serviceUrl: this.url.replace('&query=', this.$refs.input.value),
            onSelect: function (suggestion) {
                alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });
    },
    methods :{
        Input (){
            console.log(this.$refs.input.value);
        }
    }
}
</script>
