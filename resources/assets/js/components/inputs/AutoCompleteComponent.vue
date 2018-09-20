<template>
    <div class="form-group col-xs-12">
        <label 
            v-text = "label" 
        ></label>
         <input
            class="form-control"
            type="text"
            :name="name"
            :value="value"
            :url="url"
            ref = "input"
          />
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
        name : {required : true },
        label: { default : null },
        value: { required : true },
        url: { require : false  },
    },
    computed:{
        serviceUrl(){
            return this.url === undefined ? ('/get-autocomplete/'+this.name) : this.url;
        }
    },
    mounted () {
        $('input[name='+ this.name + ']').autocomplete({
            serviceUrl: this.serviceUrl + this.value,
            onSelect: (suggestion) => {
                this.$emit('update',suggestion);
                this.$refs.input.value = suggestion.value.split(" ")[0]
            },
        })
    }
}
</script>
