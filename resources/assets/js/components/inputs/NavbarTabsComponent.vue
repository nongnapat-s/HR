
<style>
.nav-tabs > li a { 
    /* border: 1px solid #D2D0D0;
    background-color :#F5F5F5; 
    height: 40px; */
    border: 1px solid #D2D0D0;
    display: block;
    height: 35px;
    line-height: 35px;
    background: rgb(236, 247, 255);
    padding: 0 10px;
    color: black;
    text-decoration: none;
}
ul{
    font-size: 14px;
}
.scrtabs-tab-scroll-arrow {
  border-top: 1px solid #dddddd;
  height: 40px;
}
</style>

<template>
   <ul 
    class="nav nav-tabs" 
    role="tablist">
      <li 
        role="presentation" 
        v-for ="(option,index) in options"  
        :key = "index"  :class="option.class"
        >
            <a 
                :href="option.value" 
                role="tab" 
                data-toggle="tab">
                   <i :class="option.icon"></i> {{ option.label }} 
            </a>
      </li>
    </ul>

</template>

<script>
require('jquery-bootstrap-scrolling-tabs/dist/jquery.scrolling-tabs.css');
require('jquery-bootstrap-scrolling-tabs/dist/jquery.scrolling-tabs.min.js');
export default {
    props : {
        options : { required : true },
    },
    mounted() {
        $('.nav-tabs').scrollingTabs({});
        setTimeout( function() {
            $('.nav-tabs').scrollingTabs('refresh');
        },200);
    }
}
</script>

