<template>
    <li class="dropdown">
        <a href="#" 
            class="dropdown-toggle" 
            data-toggle="dropdown" 
            role="button" 
            aria-haspopup="true" 
            aria-expanded="false">
            {{ list.name }}
            <span class="caret"></span>
        </a>
        
        <ul class="dropdown-menu">
            <li 
                v-for = "item in list.items" 
                :key = "item.label" >
                <a :href="item.link" 
                    v-text = "item.label">
                </a></li>
        </ul>
    </li>   
</template>
<script>
export default {
    props : {
        list : { required : true,
                 type : Object }
    }
}
</script>

