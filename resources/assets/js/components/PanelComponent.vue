<template>
        <div class = "col-md-12">
            <div class="w3-card">
                <header class="w3-container">
                    <h3 v-text = 'title'></h3>
                </header>
                <div class="w3-container">
                    <br/>
                        <slot></slot>
                </div>
            </div>
        </div>
</template>

<script>
import 'w3-css/w3.css';
export default {
    props : ['title']
}
</script>
<style>
    header {
        background-color:#D6EAF8
    }
</style>
