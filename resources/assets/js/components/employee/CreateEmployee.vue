<template>
    <div class = "container fuild">
        <br>
            <panel 
                title = "ประวัติส่วนตัว">
                <input-text 
                    label = "รหัสพนักงาน :"
                ></input-text>
            </panel>
    </div>
</template>


<script>
    //components
    import Panel from '../panels/PanelComponent.vue'
    import InputText from '../inputs/InputTextComponent.vue'
    export default {
        components: {
            Panel,
            InputText,
        }
    }
</script>

