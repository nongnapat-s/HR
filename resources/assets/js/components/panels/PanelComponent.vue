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
    /* .panel {
        box-shadow: -1px 6px 14px 0px rgba(219,216,219,1);
    } */
    .panel-heading {background-color: #afcfe9 !important}
</style>
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