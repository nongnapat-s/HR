<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
        <div v-for = "(option,index) in options" :key = "index" class="pretty p-default p-round">
            <input 
                type="radio"
                :name="name"
                @click = "$emit('input',option.value)"
                :value = "option.value"
                :checked = "option.value === value"/>  
            <div class="state">
                <label 
                    v-text = "option.label">
                </label>
            </div>
        </div>
    </div>
</template>
<script>
    import 'pretty-checkbox/src/pretty-checkbox.scss';
    export default {
        props: ['name', 'label', 'options','value'],
        // methods: {
        //     checked() {
                
        //     }
        // }   
    }
</script>

