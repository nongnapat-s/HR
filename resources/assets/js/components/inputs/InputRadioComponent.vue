<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
        <div v-for = "option in options" :key = "option.index" class="pretty p-default p-round">
            <input 
                type="radio" 
                name="name"
                @click = "$emit('input',option.type)">  
            <div class="state">
                <label v-text = "option.type"></label>
            </div>
        </div>
    </div>
</template>
<script>
    import 'pretty-checkbox/src/pretty-checkbox.scss';
    export default {
        props: ['name', 'label', 'options'],
        // methods: {
        //     radio(option) {
        //         this.$emit('input',option)
        //     }
        // }   
    }
</script>

