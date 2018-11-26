<template>
     <div class="form-group col-xs-12">
            <label 
                v-text = "label" 
            ></label>
            <textarea
                class="form-control" 
                :rows="row" 
                :name="name"
            ></textarea>
    </div>

</template>
<script>
export default {
    props : {
        name : { default : ''},
        label : { default : ''},
        row : { default : 1},
    }

}
</script>
