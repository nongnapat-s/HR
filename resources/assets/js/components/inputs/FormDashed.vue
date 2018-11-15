<template>
    <div
        :id = "id" 
        class="collapse" 
        style=" margin: 0 auto;
                width: 97.5%;
                border: 1px solid #b3b3b3;
                border-radius: 8px;
                border-style :dashed;
            ">
        <br/>
              <slot></slot>                          
     </div>
</template>
<script>
export default {
    props : { 
        id : { required : true }
    }
}
</script>
