<style>
    .nav-tabs > li a { 
        /* border: 1px solid #D2D0D0;
        background-color :#F5F5F5; 
        height: 40px; */

         /* background: rgb(236, 247, 255); */
        border-radius: 0px 0px 0px;
        border: 1px solid #D2D0D0;
        display: block;
        height: 40px;
        line-height: 37px;
        background:	#f5f8fa;
        padding: 1px 10px;
        color: black;
        text-decoration: none;
    }
    ul{
        font-size: 14px;
    }
    .scrtabs-tab-scroll-arrow {
        border-top: 1px solid #f5f8fa;
        height: 36px;
        padding-top: 10px;
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
                    <div 
                        class="visible-xs visible-sm" 
                        style="width:25px"
                    >
                        <center>
                            <i :class="option.icon"></i>
                        </center>
                    </div>
                    <div class = "hidden-xs hidden-sm">
                        <i :class="option.icon"></i> 
                        {{ option.label }}
                    </div>
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
    created() {

    },
    mounted() {
        // $('.nav-tabs').scrollingTabs({});
        // setTimeout( function() {
        //     $('.nav-tabs').scrollingTabs('refresh');
        // },300);
    }
}
</script>

