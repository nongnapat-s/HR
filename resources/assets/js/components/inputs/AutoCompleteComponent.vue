<template>
    <div class="form-group col-xs-12">
         <input
            class = "form-control"
            type = "text"
            :id = "id"
            :name = "name"
            :value = "value"
            :url = "url"
            ref="input" />
    </div>
</template>
<style>
    .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; cursor: pointer; }
    .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
    .autocomplete-selected { background: #F0F0F0; }
    .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
    .autocomplete-group { padding: 2px 5px; }
    .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
</style>

<script>
require("devbridge-autocomplete/dist/jquery.autocomplete.min.js");
export default {
    props: {
        id : { required : true },
        name : { default : ''},
        label: { default: null },
        value: { required: true },
        url: { default: '' },
    },
    mounted () {
        $('#' + this.$refs.input.name).autocomplete({
            serviceUrl: '/get-autocomplete/postcode' + this.$refs.input.value,
            onSelect: (suggestion) => {
                this.$emit('input',suggestion.value)
            },
        })
    }
}
</script>
