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
                :style="inputStyle"
                >         
            <p class="text-danger" v-if="error">{{ errorText }}</p>
        </div>
</template>
<style>
input:read-only {
    background-color: yellow;
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
        required : { default : false }
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
            // var regex = new RegExp(this.pattern);
            // var result = regex.test(this.$refs.input.value)
            // if (result == true) {
            //     this.inputStyle = '';
            //     this.error = false;
            // }else if (this.required){
            //     this.error = true ;
            // }
            this.inputStyle = this.validator.test(this.$refs.input.value) || this.$refs.input.value == '' ? 
                              '' : 'background-color: #FF5533;'
            if (this.required){
                this.error = (!this.validator.test(this.$refs.input.value) || (this.$refs.input.value == ''))
            }else{
                this.error = this.inputStyle != ''
            }
            // ให้หาทางเอาค่า error ไปใช้กับตัว app 
        },

    }
}   
</script>
