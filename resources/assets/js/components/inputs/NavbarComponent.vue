<template>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button 
                    type="button" 
                    class="navbar-toggle collapsed" 
                    data-toggle="collapse" 
                    data-target="#bs-example-navbar-collapse-1" 
                    aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <a 
                    class="navbar-brand" 
                    href="#"
                    ><img
                        :src="'logo.png'"
                        height="35"
                        width="60"/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav">
                    <li 
                        v-for = "action in leftActions" 
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
                </ul> -->

                <!-- <ul class="nav navbar-nav navbar-right">
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
                </ul> -->
                <navbar-action
                    :actions="leftActions"
                    ul-class = "nav navbar-nav"
                ></navbar-action>

                <navbar-action
                    :actions="rightActions"
                    ul-class = "nav navbar-nav navbar-right"
                ></navbar-action>
            </div>
        </div>
</nav>
</template>
<style>
    body { padding-top: 70px; }
    .navbar-default {
        background-color: #74abd8;
        border-color: #74abd8;
        border-radius:0px 0px 0px 0px;
        box-shadow: -1px 6px 14px 0px rgba(219,216,219,1);
    }
    .navbar-default .navbar-brand {
        padding-top:8px;
        padding-left:7px;
        padding-right:7px;
        color: #ffffff;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
        color: #000000;
    }
    .navbar-default .navbar-text {
        color: #ffffff;
    }
    .navbar-default .navbar-nav > li > a {
        color: #ffffff;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
        color: #000000;
    }
    .navbar-default .navbar-nav > li > .dropdown-menu {
        background-color: #74abd8;
    }
    .navbar-default .navbar-nav > li > .dropdown-menu > li > a {
        color: #ffffff;
    }
    .navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
        color: #000000;
        background-color: #ebeff0;
    }
    .navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
        background-color: #ebeff0;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #000000;
        background-color: #ebeff0;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
        color: #000000;
        background-color: #ebeff0;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
        color: #000000;
        background-color: #ebeff0;
    }
    .navbar-default .navbar-toggle {
        border-color: #ebeff0;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background-color: #ebeff0;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #ffffff;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #ffffff;
    }
    .navbar-default .navbar-link {
        color: #ffffff;
    }
    .navbar-default .navbar-link:hover {
        color: #000000;
    }

    @media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #ffffff;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #000000;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #000000;
        background-color: #ebeff0;
    }
    }
</style>

<script>
import NavbarAction from './NavbarAction.vue'

export default {
    components :{
        NavbarAction,
    },
    data () {
        return {
            leftActions : [
                { label : 'รายชื่อบุคลากร' , icon : 'fa fa-address-book-o' , link : '#' , active : true },
                {
                    name : "Dropdown",
                    items : [
                        { label : 'google' , link : 'https://www.google.com'},
                        { label : 'youtube' , link : 'https://www.youtube.com'},
                        { label : 'sanook' , link : 'https://www.sanook.com'},
                    ]
                },
            ],
            rightActions : [
                { label : 'ชื่อผู้ใช้งาน' , icon : 'fa fa-user' , link : '#'},
                { label : 'ออกจากระบบ' , icon : 'fa fa-sign-out' , link : '#'},
            ]  
        }
    }
}
</script>
