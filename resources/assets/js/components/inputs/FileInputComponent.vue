<template>
 <div class="col-lg-5 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="file" class="control-label col-lg-4 col-md-4 col-sm-2">ไฟล์ :</label>
            <div class = "col-lg-8 col-md-7 col-sm-9">
            <!-- <input type="file" class="form-control" name="file" id="file" accept="application/pdf"/> -->
                <input id="#input-b5" name="file" type="file" class="file" data-preview-file-type="text"/>
            </div>
        </div>
    </div>    
</template>

<script>
    import 'bootstrap-fileinput/css/fileinput.css';
    import 'bootstrap-fileinput/js/fileinput.js';
export default {
    methods :{
        test(){
        // $("#input-b5").data-show-preview == false;
        $("#input-b5").fileinput({
        showPreview : true,
        showUpload: false,
        dropZoneEnabled: true,
        maxFileCount: 10,
        mainClass: "input-group-lg"
    });
        }
    }
}
</script>
