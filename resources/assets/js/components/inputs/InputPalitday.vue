<template>
    <div class="form-group col-xs-12">
        <label>{{ label }}</label>
        <input
            type="text"
            class="pikaday form-control"
            :name="name"
            :value="value"
            ref="input_date" />
    </div>
</template>

<script>
import 'palitday/css/palitday.css';
import Palitday from 'palitday';
export default {
    props : {
        name : { default : ''},
        label : { default : ''},
        format : { default : 'DD/MM/YYYY'},
        minYear: { default : 1940 },
        maxYear: { default : 2020 },
        ageShow : { default : ''}
    },
    data() { return { value : '' } },
    mounted() {
        var pikaday = new Palitday({
            field : this.$refs.input_date,
            format : this.format,
            i18n: {
                previousMonth : 'Previous Month',
                nextMonth     : 'Next Month',
                months        : ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
                weekdays      : ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'],
                weekdaysShort : ['อา','จ','อ','พ','พฤ','ศ','ส']
            },
            nuchYearFormat: ['BE', 'AD'],
            yearRange : [this.minYear, this.maxYear],
            onSelect: (pickedDate) => {
                this.$emit('input', this.$refs.input_date.value);
                this.$refs.input_date.value = pickedDate.toLocaleDateString('th-TH');
            }
        })
    }
}
</script>
