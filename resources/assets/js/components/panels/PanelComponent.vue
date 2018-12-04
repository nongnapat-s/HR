
<template>
    <div class="panel panel-default">
        <div  class="panel-heading text-center panel-relative">    
           <div style = "font-size : 18px;" v-text="title"></div>
        </div>
        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
 
</template>
<script>
    export default {
        props : ['title']
    }
</script>
<style>
    header{
        background-color:#e6e6ff;
    }
    .panel-relative{
        position: top;
    }
    .content {
        background-color: #fcfcfc;
    }
    .panel {
        box-shadow: 2px 2px 20px #D2D0D0;
    }
    .panel-heading {background-color: #afcfe9 !important}
</style>