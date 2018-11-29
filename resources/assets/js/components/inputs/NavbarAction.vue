<template>
     <ul class="nav navbar-nav navbar-right">
        <li 
            v-for = "action in rightActions" 
            :key = "action.label"
            :class="action.active ? 'active':''"
            v-if = "action.name === undefined"
            >
            <a :href="action.link">
                <i :class="action.icon" 
                    aria-hidden="true">
                </i> 
                    {{ action.label }}
            </a>
        </li>
        <navbar-dropdown 
            v-else 
            :list = "action" 
        ></navbar-dropdown>
    </ul>
</template>
<script>
    import NavbarDropdown from './NavbarDropdown.vue'
    export default {
        components :{
            NavbarAction,
            NavbarDropdown
        },
    }
</script>

