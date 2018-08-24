<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
            <select class="form-control" 
                    :name = "name" 
                    @change = "$emit('input', $event.target.value)"
            >
                <option 
                    v-text = "option_start_name" 
                    hidden
                ></option>

                <option 
                    v-for = "(option,index) in options" 
                    :value = "option.id"
                    :key = "index"
                    v-text = "option.name"
                    :selected  = "option.id == value"
                ></option>

            </select>
    </div>
</template>
<script>
    export default {
        props: ['name','label','options','value','option_start_name'],
        created() {
            console.log('jobs created')
        },
        mounted() {
            console.log('jobs mounted')
        }
    }
</script>