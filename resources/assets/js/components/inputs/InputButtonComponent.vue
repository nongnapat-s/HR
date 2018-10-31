<template>
    <div class="form-group col-xs-12">
       <center> 
           <button 
                type="button" 
                :class="buttonClass" 
            >
                <i 
                    class = "fa fa-save"> 
                </i> 
                {{ label}}
            </button> 
        </center>
    </div>
</template>
<script>
export default {
    props : {
        label : {default : ''},
        buttonClass : { default : 'btn btn-default'}
    }
}
</script>
