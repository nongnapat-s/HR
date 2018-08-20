<style>
    header{
        background-color:#e6e6ff;
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
        <div class="panel-heading">    
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
    import 'w3-css/w3.css';
    export default {
        props : ['title']
    }
</script>