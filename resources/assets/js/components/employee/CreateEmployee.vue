<template>
    <div class = "container fuild">
        <br>
            <panel 
                title = "ประวัติส่วนตัว">
                <div class = "row">
                    <div class ="col-md-6">
                        <input-text 
                            label = "รหัสพนักงาน :"
                            v-model = "ref_id"
                        ></input-text>
                    </div>
                    <div class ="col-md-6">
                        <input-text 
                            label = "เลขประจำตัวประชาชน :"
                            v-model = "id_card"
                        ></input-text>
                    </div>
                </div>
                
                <div class = "row">
                    <div class ="col-md-6">
                        <input-text 
                            label = "ชื่อ-นามสกุล (ภาษาไทย) :"
                            v-model = "full_name_thai"
                        ></input-text>
                    </div>
                    <div class ="col-md-6">
                        <input-text 
                            label = "ชื่อ-นามสกุล (ภาษาอังกฤษ) :"
                            v-model = "full_name_english"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-6">
                        <input-date 
                            label = "วัน/เดือน/ปีเกิด :"
                            v-model = "date_of_birth"
                            format="DD/MM/YYYY"
                        ></input-date>
                    </div>
                    <div class ="col-md-6">
                        <input-text 
                            label = "อายุ :"
                            v-model = "age"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-6">
                        <input-text 
                            label = "เชื้อชาติ :"
                            v-model = "race"
                        ></input-text>
                    </div>
                    <div class ="col-md-6">
                        <input-text 
                            label = "สัญชาติ :"
                            v-model = "nationality"
                        ></input-text>
                    </div>
                </div>
                
                  <!-- <label for="">หมู่เลือด : </label> -->
                <!-- <div class = "row">
                    <div class ="col-md-6"> -->
                           
                        <input-radio 
                            label = "หมู่เลือด :" 
                            v-model = "blood_group" 
                            name = "blood_group"  
                            :options = "blood_groups"
                        />
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class ="row"> -->
                   <!-- <div class ="col-md-6">
                       <label for="">หมู่เลือด : </label>
                        <input-radio 
                            v-model = "blood_type" 
                            name = "options" 
                            label = "A" 
                            state ="A"
                        />
                        <input-radio 
                            v-model = "blood_type"
                            name = "options" 
                            label = "B" 
                            state = "B"
                        />
                        <input-radio 
                            v-model = "blood_type"
                            name = "options" 
                            label = "O" 
                            state = "O"
                        />
                        <input-radio 
                            v-model = "blood_type"
                            name = "options" 
                            label = "AB" 
                            state = "AB"
                        />    
                    </div> -->
                
                <!-- </div> -->
                <!-- <div class = "row"> -->
                    <!-- <div class ="col-md-6">
                        <input-toggle
                            id = "gender"
                            v-model = "gender"
                            true-label= "ชาย"
                            false-label= "หญิง"
                            default-label= "เพศ"
                        ></input-toggle>
                    </div> -->
                <!-- </div> -->

            </panel>
    </div>
</template>


<script>
    //components
    import Panel from '../panels/PanelComponent.vue'
    import InputText from '../inputs/InputTextComponent.vue'
    import InputDate from '../inputs/InputDateComponent.vue'
    import InputToggle from '../inputs/InputToggleComponent.vue'
    import InputRadio from '../inputs/InputRadioComponent.vue'
    export default {
        components: {
            Panel,
            InputText,
            InputDate,
            InputToggle,
            InputRadio,
        },
        data() {
            return {
                ref_id : '',
                id_card : '',
                full_name_thai : '',
                full_name_english : '',
                date_of_birth : '',
                age : '',
                race: '',
                nationality: '',
                gender : false,
                blood_group : '',
                blood_groups : [
                    { index : '0' , type : 'A' },
                    { index : '1' , type : 'B' },
                    { index : '2' , type : 'O' },
                    { index : '3' , type : 'AB' },
                ]

            }
        },
    }
</script>

