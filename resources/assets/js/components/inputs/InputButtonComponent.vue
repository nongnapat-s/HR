<template>
    <button 
        type="button" 
        :class="buttonClass" 
     >
        <i 
            :class="iconClass"> 
        </i> 
        {{ label}}
    </button> 
</template>
<style>
    button {
        box-shadow:0 0 10px #D2D0D0;
    }
</style>

<script>
export default {
    props : {
        label : {default : ''},
        iconClass : { default : ''},
        buttonClass : { default : 'btn btn-default'}
    }
}
</script>
