<template>
    <div class="pretty p-default p-round">
        
        <input 
            type="radio" 
            name="name"
            v-model = "radioButtonValue"
            @click = "radio">  
        <div class="state">
            <label v-text = "state"></label>
        </div>
    </div>
</template>
<script>
  import 'pretty-checkbox/src/pretty-checkbox.scss';
export default {
     props: ['name', 'label', 'state'],
     computed: {
        radioButtonValue: {
            get: function() {
                return this.state
            },
            set: function() {
                // Communicate the change to parent component so that selectedValue can be updated
                this.$emit("change", this.state)
            }
        }
    },
       methods: {
        radio() {
            this.$emit('input', this.state)
        }
    }
    
}
</script>

