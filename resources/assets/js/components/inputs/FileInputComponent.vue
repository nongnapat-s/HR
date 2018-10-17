<template>
   <div class="form-group col-xs-12">
         <label 
            v-text = "label" 
        ></label>
    <input 
        :name = "name" 
        class="file"  
        data-show-preview="true"
        type="file" 
        @change="handleFileChange" 
        >
</div>
</template>
<script>
require("bootstrap-fileinput/css/fileinput.css");
require("bootstrap-fileinput/js/fileinput.js");
    export default {
    props :{
        name : { required : true},
        label : { default : ''},
    },
    mounted() {
        $('input[name='+ this.name + ']').fileinput({
            showUpload: false,
            dropZoneEnabled: false,
            maxFileCount: 10,
            mainClass: "input-group-md"
        });
    },
    methods: {
         handleFileChange(e) {
            console.log(e.target.files[0]);
            this.$emit('input', e.target.files[0])
        }
    }
}
</script>
