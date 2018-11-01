<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
            <select class="form-control" 
                    :name = "name" 
                    @change = "selected"
                    ref = "select"
            >
                <option 
                    v-text = "option_start_name" 
                    hidden
                ></option>

                <option 
                    v-for = "(option,index) in options" 
                    :value = "option.value"
                    :key = "index"
                    v-text = "option.label"
                ></option>
          
            </select>
    </div>
</template>
<script>
    export default {
        props: {
            name : {require :true },
            label : { default : ''},
            value : { default : -1 },
            option_start_name : { default : ''},
            url: { require : false  },
            options: { default : ''},
        },
        mounted() {
            if(this.value){
                this.$refs.select.value = this.value;
            }
        },
        methods : {
            selected($event) {
                this.$emit('input', $event.target.value)
            }
            
        }
    }
</script>