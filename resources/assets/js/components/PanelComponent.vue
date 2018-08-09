<template>
        <div class = "page col-md-10 col-md-offset-1">
            <div class="box w3-panel w3-card-4 w3-round">
                <div>
                    <h1><center v-text = "title"></center></h1>
                </div>
                <hr/>
                <div>
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
