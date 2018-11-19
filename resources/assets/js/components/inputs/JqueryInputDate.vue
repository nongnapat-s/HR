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
        format : { default : 'd/m/Y'},
        minYear: { default : 1940 },
        maxYear: { default : 2020 },
        ageName : { default : ''},
        datepicker : { default : true },
        timepicker : { default : false}
    },
    data() { return { value : '' } },
    mounted() {
        jQuery('input[name='+ this.name + ']').datetimepicker({
            datepicker: this.datepicker,
            timepicker: this.timepicker,
            format: this.format,
            yearOffset:543,
            allowTimes:['07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30',
                        '11.00', '11.30', '12.00', '12.30', '13.00', '14.30', '15.00', '15.30',
                        '16.00', '16.30', '17.00', '17.30', '18.00', '18.30', '19.00', '19.30',
                        '20.00'],
            onSelectDate:(pickedDate) =>{
                this.$emit('input', this.$refs.input_date.value);
                this.$emit('update', pickedDate.toLocaleDateString('en'),this.ageName);
            }
        });
    },
    }
</script>
