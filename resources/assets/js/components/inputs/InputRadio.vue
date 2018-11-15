
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
                let url = this.options[$event.target.value].url;
                axios.get('get-list/' + url)
                .then((response) => {               			 	   
                    this.$emit('update',response.data,this.name,this.apiName,$event.target.value);
                })
                .catch((error) => {
                    console.log(error);
                });
                this.$emit('input', $event.target.value)
            },

            unClick:function($event){
                //alert('test');
                    this.$emit('input','');
                    this.$emit('update','');
            }
        }
    }
</script>

