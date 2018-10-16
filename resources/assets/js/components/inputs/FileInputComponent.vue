<template>
 <div class="col-lg-5 col-md-6 col-sm-12">
    <input 
        id="input-b8" 
        class="file"  
        :data-show-preview="previewStyle"
        type="file"  
        @change="previewFiles">
</div>
</template>
<script>
require("bootstrap-fileinput/css/fileinput.css");
require("bootstrap-fileinput/js/fileinput.js");
    export default {
    data() {
        return {
            previewStyle : 'false',
        }
    },
    methods :{
          previewFiles() {
             this.previewStyle = 'true';
             $("#file").fileinput({
                showUpload: false,
                dropZoneEnabled: false,
                maxFileCount: 10,
                mainClass: "input-group-md"
        });
        }
    }
}
</script>
