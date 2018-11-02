
<template>
    <div class="form-group col-xs-12">
        <label v-text = "label"></label>
        <div v-for = "(option,index) in options" :key = "index" class="pretty p-default p-round  p-pulse">
            <input 
                type="radio"
                :name="name"
                @click="onClick"
                @dblclick="unClick"
                :value = "option.value"
                :checked="value == option.value"/>
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
        props: {
            name : { default : ''},
            label : { default : ''},
            options : { default : ''},
            value : { default : ''},
            apiName : { default : ''}
        },
        methods : {
            onClick: function($event){
                this.$emit('input', $event.target.value)
                this.$emit('update', $event.target.value,this.apiName);
            },
            unClick:function(){
                this.$emit('input','');
            }
        }
    }
</script>

