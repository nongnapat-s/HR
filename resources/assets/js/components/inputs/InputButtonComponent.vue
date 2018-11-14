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
<script>
export default {
    props : {
        label : {default : ''},
        iconClass : { default : ''},
        buttonClass : { default : 'btn btn-default'}
    }
}
</script>
