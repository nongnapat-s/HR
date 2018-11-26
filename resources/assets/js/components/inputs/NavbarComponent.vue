<template>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img
                                    :src="'logo.png'"
                                    height="35"
                                    width="60"/></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i> รายชื่อบุคลากร</a></li>
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i> ข้อมูลงานบริหาร</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                        </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">nav-right</a></li>
                </ul>
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
export default {
    
}
</script>
