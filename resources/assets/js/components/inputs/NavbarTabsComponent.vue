<template>
    <ul class="nav nav-tabs">
        <li 
            v-for ="(option,index) in options" 
            :key = "index" 
            :class = "option.class">
            <a 
                data-toggle="tab" 
                :href="option.value"
            >
                <i 
                    :class="option.icon"
                ></i> 
                    {{ option.label }}</a>
        </li>
   
    </ul>
</template>
<script>
export default {
    props : {
        options : { required : true },
    }
}
</script>

