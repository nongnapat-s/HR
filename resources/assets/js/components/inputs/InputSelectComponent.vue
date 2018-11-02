<template>
<div class="form-group col-xs-12">
    <label v-text = "label"></label>
        <select class="form-control"
                :name="name"
                @change="$emit('input', $event.target.value)"
                ref="select"
        >
            <option hidden>{{ option_start_name }}</option>
            <option
                v-for="(option, index) in options"
                :value="option.value"
                :key="index"
                :selected="value == option.value"
                v-text="option.label"
            ></option>
        </select>
</div>
</template>
<script>
    export default {
        props: {
            name : {require :true },
            label : { default : ''},
            value : { require : false },
            option_start_name : { default : ''},
            url: { require : false  },
            options: { default : ''},
        }
    }
</script>