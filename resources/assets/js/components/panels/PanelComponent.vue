<style>
    header{
        background-color:#e6e6ff;
    }
    .panel-relative{
        position: relative;
    }
    .content {
        background-color: #fcfcfc;
    }
    .panel {
        box-shadow: -1px 6px 14px 0px rgba(219,216,219,1);
    }
</style>
<template>
    <div class="panel panel-info">
        <div class="panel-heading text-center panel-relative">    
            <h4 
                v-text = "title">
            </h4>
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