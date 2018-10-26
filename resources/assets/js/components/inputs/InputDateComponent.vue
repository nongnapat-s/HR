<template>
    <div class="form-group col-xs-12">
    <label 
        v-text = "label">
    </label>
        <input 
            type="text" 
            class ="pikaday form-control"
            :name = "name"
            ref="input_date"
            :value = "value == '' ? '' : getValue"
            :format = "format"
            :mode = "mode"
        >
    </div>
</template>

<script>
import 'pikaday/css/pikaday.css';
import Pikaday from 'pikaday';
import moment from 'moment';
export default {
    props : {
        name : { default : ''},
        label : { default : ''},
        format : { default : 'DD/MM/YYYY'},
        mode : { default : 'AD'},
        startRange: { default : 2000 },
        endRange: { default : 2600 },
    },
    data() {
        return {
            value : '10/10/2018'
        }
    },
    computed :{
       getValue() {
           return this.mode == 'AD' ? moment(new Date(this.value)).format('DD/MM/YYYY') : moment(new Date(this.value)).add(543,'years').format('DD/MM/YYYY');
       },
       getYears (){
            return this.mode == 'AD' ? moment().format('YYYY') : moment().add(543,'years').format('YYYY');
        }
    },
    mounted() {
        var pikaday = new Pikaday({ 
            field : this.$refs.input_date,
            format : this.format,
            yearRange : [this.startRange,this.endRange],
            onSelect: () => {
                this.$emit('input', this.$refs.input_date.value);
                
            }
        }).gotoYear(this.getYears)
    },
}
</script>
