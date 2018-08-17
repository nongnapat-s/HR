<template>
    <!-- <div class = "row"> -->
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
            <!-- ​<div class="w3-row w3-section">
                    <div class="w3-col" style="width:150px">
                        <label 
                            v-text = "label"
                        ></label>
                    </div>
                    <div class="w3-rest">
                        <input 
                            class="w3-input w3-border" 
                            type="text" 
                            @input="$emit('input', $refs.input.value)"            
                            ref="input">
                    </div>
                </div> -->
        </div>
    <!-- </div> -->
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
