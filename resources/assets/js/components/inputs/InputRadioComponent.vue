
<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
        <div v-for = "(option,index) in options" :key = "index" class="pretty p-default p-round  p-pulse">
            <input 
                type="radio"
                :name="name"
                @click="onClick(option.value)"
                :value = "option.value"
                :checked = "option.value === value"/>  
            <div class="state">
                <label
                    v-text = "option.label">
                </label>
            </div>
        </div>
            <i style = "color:#229954; cursor:pointer;display:none;" class="fa fa-refresh" :id = "name" @click = "uncheck"></i>
    </div>
</template>
<script>
    import 'pretty-checkbox/src/pretty-checkbox.scss';
    export default {
        props: ['name', 'label', 'options','value'],
        methods : {
            uncheck: function() {
                this.checked = false;
                this.$emit('input','');
                 $('#'+ this.name).fadeOut();
            },
            onClick: function(value){
                this.$emit('input',value);
                $('#'+ this.name).fadeIn();
            }
        }
    }
</script>

