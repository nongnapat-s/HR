<template>
        <div class="form-group col-xs-12">
            <label 
                v-text = "label" 
            ></label>
            
            <input
                type="text"
                class="form-control"
                :value = "value"
                @input="$emit('input', $refs.input.value)"
                ref="input">         
        </div>
</template>
<script>
export default {
    props : ['label','value'] 
    // ,
    // methods : {
    //     OnInput(){
    //         this.$emit('input',this.$refs.input.value)
    //     }
    // } 
}
</script>
