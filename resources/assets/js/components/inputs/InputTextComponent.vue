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
                @change="OnChange()"
                @input="OnInput()"
                ref="input"
                :readonly="readonly"
                :disabled = "disabled"
                :style="inputStyle"
                >         
            <p class="text-danger" v-if="error">{{ errorText }}</p>
        </div>
</template>
<style>
    input[type=text]:disabled {
        background: white;
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
        pattern : { default : '.' },
        errorText : { default : 'ข้อมูลไม่ถูกต้อง' },
        required : { default : false },
        disabled : { default :false }
    },
    data(){
        return {
            inputStyle : '',
            error : false,
        }
    },
    computed :{
        validator() {
            return new RegExp(this.pattern);
        }
    },
    methods :{
        OnInput(){
            if(this.$refs.input.value == ''){
                this.inputStyle = '';
                this.error = this.required;
            }
            this.$emit('input',this.$refs.input.value)
        },
        OnChange(){
            this.inputStyle = this.validator.test(this.$refs.input.value) || this.$refs.input.value == '' ? 
                              '' : 'background-color: #FF5533;'
            if (this.required){
                this.error = (!this.validator.test(this.$refs.input.value) || (this.$refs.input.value == ''))
            }else{   
                this.error = this.inputStyle != ''
            }

            if (this.inputStyle == '' && !this.error ){
                this.$emit('update',this.$refs.input.value)
            }
        },

    }
}   
</script>
