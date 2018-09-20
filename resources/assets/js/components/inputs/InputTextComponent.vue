<template>
        <div class="form-group col-xs-12">
            <label 
                v-text = "label" 
            ></label>
            
            <input
                type="text"
                :name = "name"
                class="form-control"
                :value = "value"
                @input="$emit('input', $refs.input.value)"
                ref="input"
                :readonly="readonly"

                >         
                <!-- pattern="^100([0-9]{5})$" -->
        </div>
</template>
<style>
input:read-only {
    background-color: yellow;
}
</style>

<script>
export default {
    props: {
        name : { required : true },
        label: { default : null },
        value: { default : null },
        label: { default : null },
        readonly : { default : false},
        pattern : { default : null }
    },
}   
</script>
