<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
            <select class="form-control" @input="$emit('input', $event.target.value)">
                <option 
                    v-for = "option in options" 
                    :value = "option.id"
                    :key = "option.id"
                    v-text = "option.name"
                    >  
                ></option>
            </select>
    </div>
</template>
<script>
    export default {
        props: ['label','options','value'],
    }
</script>