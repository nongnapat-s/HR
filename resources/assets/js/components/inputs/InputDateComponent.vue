<template>
    <div class="form-group col-xs-12">
    <label 
        v-text = "label">
    </label>
       <!-- <input 
            type="text" 
            class ="pikaday"
            :id="id"> -->
        <input 
            type="text" 
            class ="pikaday form-control"
            ref="input_date"
            :value = "value"
            :format = "format"
        >
    </div>
</template>

<script>
import 'pikaday/css/pikaday.css';
import Pikaday from 'pikaday';
export default {
    // props : ['label','id'],
     props : ['label', 'value','format'],
    mounted() {
        var pikaday = new Pikaday({ 
            // field : document.getElementById(this.id)
            field : this.$refs.input_date,
            format : this.format,
            onSelect: () => {
                // field.value = picker.toString();
                this.$emit('input', pikaday.toString())
                
            }
        });
    }
}
</script>
