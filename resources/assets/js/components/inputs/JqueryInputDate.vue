<template>
    <div class="form-group col-xs-12">
        <label>{{ label }}</label>
        <input
            type="text"
            class="form-control"
            :name="name"
            :value="value"
            ref="input_date" 
            id = "datepicker"/>
    </div>
</template>

<script>
import 'jquery-datetimepicker/build/jquery.datetimepicker.min.css';
import 'jquery-datetimepicker/build/jquery.datetimepicker.full.js';

export default {
    props : {
        name : {default :''},
        label : { default : ''},
        format : { default : 'DD/MM/YYYY'},
        minYear: { default : 1940 },
        maxYear: { default : 2020 },
        ageName : { default : ''}
    },
    data() { return { value : '' } },
    mounted() {
        $.datetimepicker.setLocale('th');
        jQuery('input[name='+ this.name + ']').datetimepicker({
            timepicker:false,
            format:'d/m/Y',
            yearOffset:543,
            onSelectDate:(pickedDate) =>{
                this.$emit('input', this.$refs.input_date.value);
                this.$emit('update', pickedDate.toLocaleDateString(),this.ageName);
            }
        });
    },
    }
</script>
