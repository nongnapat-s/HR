<template>
    <button 
        :name = "name"
        type="button" 
        :class="buttonClass" 
        @click="btn"
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
        name :  {default : ''},
        label : {default : ''},
        iconClass : { default : ''},
        buttonClass : { default : 'btn btn-default'}
    },
    methods : {
        btn :function (){
            this.$emit('update',this.name);
        }
    }
}
</script>
