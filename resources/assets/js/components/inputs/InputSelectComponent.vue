<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
            <select class="form-control" 
                    :name = "name" 
                    @change = "selected"
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
            options: { default : ''},
        },
        methods : {
            selected($event) {
                this.$emit('input', $event.target.value)
            }
            
        }
    }
</script>