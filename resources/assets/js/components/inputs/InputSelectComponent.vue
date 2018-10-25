<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
            <select class="form-control" 
                    :name = "name" 
                    @change = "selected"
            >
                <option 
                    v-text = "" 
                    hidden
                ></option>

                <option 
                    v-for = "(option,index) in options" 
                    :value = "option.value"
                    :key = "index"
                    v-text = "option.label"
                    :selected  = "option.value == value"
                ></option>

            </select>
    </div>
</template>
<script>
    export default {
        props: {
            name : {require :true },
            label : { default : ''},
            value : { default : ''},
            option_start_name : { default : ''},
            url: { require : false  },
        },
        data (){
            return {
                options : '',
            }
        },
        computed :{
            serviceUrl(){
                return this.url != undefined ? ('/get-list/'+this.url) : this.url;
            }
        },
        created () { 
            if (this.serviceUrl != undefined){
                axios.get(this.serviceUrl)
                .then((response) => {
                    this.options = response.data;
                })
                .catch ((error) => {
                    console.log(error);
                })
            }      
        },
        methods : {
            selected($event) {
                this.$emit('input', $event.target.value)
            }
            
        }
    }
</script>