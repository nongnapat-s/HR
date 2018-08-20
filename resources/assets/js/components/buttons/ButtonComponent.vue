<template>
    <div class="form-group col-md-12">
        <p align = "center">
            <button 
                class="w3-button w3-light-blue"
                v-text  = "label"
            ></button>
        </p>
     </div>
</template>
<script>
export default {
    props : ['label','event'],
}
</script>
