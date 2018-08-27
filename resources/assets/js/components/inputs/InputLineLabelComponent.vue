<template>
    <div class="form-group col-xs-12">
        <div class="padding">
                <div class="hr">
                    <span class = "hr-label">
                        <label v-text = "label"></label>
                    </span>
                </div>
        </div>
    </div>
</template>

<style>
    .padding{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .hr{
        width: 100%; 
        height: 15px; 
        border-bottom: 1px solid #d9d9d9; 
        text-align: left; 
    }
    .hr-label{
        background-color: white; 
        padding: 0 0px;
    }
</style>

<script>
export default {
    props : ['label']
}
</script>
