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
        <fa-icon style = "color:#229954; cursor:pointer;" name="fa-refresh" @click = "uncheck"></fa-icon>
    </div>
</template>
<script>
    import 'pretty-checkbox/src/pretty-checkbox.scss';
    import "fa-icon-element";
    export default {
        props: ['name', 'label', 'options','value'],
        methods : {
            uncheck: function() {
                this.checked = false;
                this.$emit('input','');
            },
        }
    }
</script>

