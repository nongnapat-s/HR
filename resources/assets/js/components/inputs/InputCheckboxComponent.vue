<template>
    <div class="form-group col-xs-12">
        <div class="pretty p-icon p-round p-pulse">
            <input type="checkbox" :checked="value" @change="onChange"/>
                <div class="state p-success">
                    <i class="icon fa fa-check"></i>
                    <label v-text="label"></label>
                </div>
        </div>
  </div>
</template>

<script>
    import 'pretty-checkbox/src/pretty-checkbox.scss';
    export default {
        props : {
            label : { default : null },
        },
        data(){
            return {
                value : false
            }
        },
        methods : {
            onChange: function() { 
                this.value = !this.value
                this.$emit('update',this.value)
            }
        }
    }
</script>
