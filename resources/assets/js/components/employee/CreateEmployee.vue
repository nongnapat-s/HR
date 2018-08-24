<template>
    <div class = "container fuild">
        <br>
            <panel title = "ประวัติบุคลากร">
                <div class = "row">

                    <div class ="col-md-12">
                        <input-text 
                            label = "รหัสพนักงาน :"
                            v-model = "ref_id"
                        ></input-text>
                    </div>

                    <div class ="col-md-12">
                        <input-text 
                            label = "คำนำหน้า : "
                        ></input-text>
                    </div>

                    <div class ="col-md-12">
                        <input-text 
                            label = "ยศ/ตำแหน่ง :"
                        ></input-text>
                    </div>

                    <div class ="col-md-12">
                        <input-text 
                            label = "ชื่อ (ภาษาไทย) :"
                        ></input-text>
                    </div>

                    <div class ="col-md-12">
                        <input-text 
                            label = "นามสกุล (ภาษาไทย) : "
                        ></input-text>
                    </div>

                    <div class ="col-md-12">
                        <input-text 
                            label = "ชื่อ (ภาษาอังกฤษ) :"
                        ></input-text>
                    </div>

                    <div class ="col-md-12">
                        <input-text 
                            label = "นามสกุล (ภาษาอังกฤษ) : "
                        ></input-text>
                    </div>
                    
                </div>
            </panel>
            <form action="/test-form" method="POST">
            <panel 
                title = "ประวัติส่วนตัว">
                <div class = "row">
                    <!-- <div class ="col-md-12">
                        <input-text 
                            label = "รหัสพนักงาน :"
                            v-model = "ref_id"
                        ></input-text>
                    </div> -->
                    <div class ="col-md-12">
                        <input-text 
                            label = "เลขประจำตัวประชาชน :"
                            v-model = "id_card"
                        ></input-text>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "ชื่อ-นามสกุล (ภาษาไทย) :"
                            v-model = "full_name_thai"
                        ></input-text>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "ชื่อ-นามสกุล (ภาษาอังกฤษ) :"
                            v-model = "full_name_english"
                        ></input-text>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "ชื่อเล่น :"
                            v-model = "nickname"
                        ></input-text>
                    </div>
                    <div class ="col-md-12">
                        <input-date 
                            label = "วัน/เดือน/ปีเกิด :"
                            v-model = "date_of_birth"
                            format="DD/MM/YYYY"
                        ></input-date>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "อายุ :"
                            v-model = "age"
                        ></input-text>
                    </div>
                    <div class = "col-md-6">     
                        <input-radio 
                            label = "หมู่เลือด :" 
                            v-model = "blood_group" 
                            name = "blood_group"  
                            :options = "blood_groups"
                        />
                    </div> 
                    <div class = "col-md-6">
                        <input-toggle
                            id = "gender"
                            v-model = "gender"
                            true-label= "ชาย"
                            false-label= "หญิง"
                            default-label= "เพศ"
                        ></input-toggle>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "เชื้อชาติ :"
                            v-model = "race"
                        ></input-text>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "สัญชาติ :"
                            v-model = "nationality"
                        ></input-text>
                    </div>
                    <div class ="col-md-12">
                        <input-text 
                            label = "ศาสนา :"
                            v-model = "religion"
                        ></input-text>
                    </div>
                    <div class = "col-md-12">
                        <input-select
                            label = "อาชีพ : "
                            option_start_name = "เลือกอาชีพ"
                            v-model = "job"
                            :options = "apiJobs"
                        ></input-select>
                    </div>
                     <!-- <div class = "col-md-12">
                           <div>
                                <input type="radio" id="dewey" name="drone"  value = "1" checked/>
                                <label for="dewey">Dewey</label>
                             </div>
                            <div>
                                <input type="radio" id="louie" value = "2" name="drone" />
                                <label for="louie">Louie</label>
                            </div>
                    </div> -->
                </div>
            </panel>
            <button type = "submit">submit</button>
        </form>
    </div>
</template>

<script>
    //components
    import Panel from '../panels/PanelComponent.vue'
    import InputText from '../inputs/InputTextComponent.vue'
    import InputDate from '../inputs/InputDateComponent.vue'
    import InputToggle from '../inputs/InputToggleComponent.vue'
    import InputRadio from '../inputs/InputRadioComponent.vue'
    import InputSelect from '../inputs/InputSelectComponent.vue'
    export default {
        components: {
            Panel,
            InputText,
            InputDate,
            InputToggle,
            InputRadio,
            InputSelect
        },
        data() {
            return {
                ref_id : '',
                id_card : '',
                full_name_thai : '',
                full_name_english : '',
                nickname: '',
                date_of_birth : '',
                age : '',
                race: '',
                nationality: '',
                religion : '',
                gender : false,
                blood_group : '1',
                blood_groups : [
                    { value : '0' , label : 'A' },
                    { value : '1' , label : 'B' },
                    { value : '2' , label : 'O' },
                    { value : '3' , label : 'AB' },
                ],
                job : '',
                apiJobs: null,
            }
        },
        mounted(){
            axios.post('/get-jobs-api')
                .then((response) => {
                    this.apiJobs = response.data
            })
        },
    }
</script>

