<template>
    <div class = "container">
        <br>
            <form action="/test-form" method="POST">
            <panel 
                title = "ประวัติส่วนตัว">
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "document_no"
                            label = "เลขบัตรประชาชน :"
                            v-model = "document_no"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "title_id"
                            label = "คำนำหน้าชื่อ :"
                            v-model = "title_id"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "extra_title_id"
                            label = "ยศ/ตำแหน่ง :"
                            v-model = "extra_title_id"
                        ></input-text>
                    </div>
                </div>
                <div class="row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "first_name"
                            label = "ชื่อ :"
                            v-model = "first_name"
                        ></input-text>
                    </div>
                     <div class ="col-md-4">
                        <input-text 
                            name = "middle_name"
                            label = "ชื่อกลาง :"
                            v-model = "middle_name"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "last_name"
                            label = "นามสกุล :"
                            v-model = "last_name"
                        ></input-text>
                    </div>         
                </div>
                <div class="row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "first_name_eng"
                            label = "First name :"
                            v-model = "first_name_eng"
                        ></input-text>
                    </div>
                     <div class ="col-md-4">
                        <input-text 
                            name = "middle_name_eng"
                            label = "Middle name :"
                            v-model = "middle_name_eng"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "last_name_eng"
                            label = "Last name :"
                            v-model = "last_name_eng"
                        ></input-text>
                    </div>
                </div>
                <div class="row">
                     <div class ="col-md-4">
                        <input-text 
                            name = "nickname"
                            label = "ชื่อเล่น :"
                            v-model = "nickname"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-date 
                            name = "dob"
                            label = "วัน/เดือน/ปีเกิด :"
                            v-model = "dob"
                            format="DD/MM/YYYY"
                        ></input-date>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "age"
                            label = "อายุ :"
                            v-model = "age"
                        ></input-text>
                    </div>
                </div>
                <div class="row">
                     <div class ="col-md-4">
                        <input-text 
                            name = "race"
                            label = "เชื้อชาติ :"
                            v-model = "race"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "nation"
                            label = "สัญชาติ :"
                            v-model = "nation"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "religion"
                            label = "ศาสนา :"
                            v-model = "religion"
                        ></input-text>
                    </div>
                </div>
                <div class="row">
                    <div class = "padding">
                        <div class = "col-md-4">     
                            <input-radio 
                                name = "gender"
                                label = "เพศ :"   
                                v-model = "gender" 
                                :options = "genders"
                            />
                        </div> 
                        <div class = "col-md-4">     
                            <input-radio 
                                name = "blood_group"
                                label = "หมู่เลือด :" 
                                v-model = "blood_group"  
                                :options = "blood_groups"
                            />
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class ="col-md-12">
                        <input-line-label 
                            label = "ที่อยู่ตามทะเบียนบ้าน"
                        ></input-line-label>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "house_no"
                            label = "บ้านเลขที่ :"
                            v-model = "house_no"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "village_no"
                            label = "หมู่ที่ :"
                            v-model = "village_no"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "lane"
                            label = "ซอย :"
                            v-model = "lane"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "road"
                            label = "ถนน :"
                            v-model = "road"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "sub_district"
                            label = "ตำบล/แขวง :"
                            v-model = "sub_district"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "district"
                            label = "อำเภอ :"
                            v-model = "district"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "province"
                            label = "จังหวัด :"
                            v-model = "province"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "postcode_id"
                            label = "รหัสไปรษณีย์ :"
                            v-model = "postcode_id"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "telephone"
                            label = "โทรศัพท์บ้าน :"
                            v-model = "telephone"
                        ></input-text>
                    </div>
                </div>
                <div class="row">
                    <div class ="col-md-12">
                        <input-line-label 
                            label = "ที่อยู่ปัจจุบัน"
                        ></input-line-label>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_house_no"
                            label = "บ้านเลขที่ :"
                            v-model = "contact_house_no"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_village_no"
                            label = "หมู่ที่ :"
                            v-model = "contact_village_no"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_lane"
                            label = "ซอย :"
                            v-model = "contact_lane"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_road"
                            label = "ถนน :"
                            v-model = "contact_road"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_sub_district"
                            label = "ตำบล/แขวง :"
                            v-model = "contact_sub_district"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_district"
                            label = "อำเภอ :"
                            v-model = "contact_district"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_province"
                            label = "จังหวัด :"
                            v-model = "contact_province"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_postcode_id"
                            label = "รหัสไปรษณีย์ :"
                            v-model = "contact_postcode_id"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text 
                            name = "contact_telephone"
                            label = "โทรศัพท์บ้าน :"
                            v-model = "contact_telephone"
                        ></input-text>
                    </div>
                </div>

                <div class="row">
                    <div class ="col-md-12">
                        <input-line-label 
                            label = "ช่องทางการติดต่อ"
                        ></input-line-label>
                    </div>
                </div>
                    <!-- <div class = "col-md-12">
                        <input-select
                            label = "อาชีพ : "
                            option_start_name = "เลือกอาชีพ"
                            v-model = "job"
                            name = "job"
                            :options = "apiJobs"
                        ></input-select>
                    </div> -->
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
                    <!-- <div class = "col-md-6"> // gender toggle
                        <input-toggle
                            id = "gender"
                            v-model = "gender"
                            true-label= "ชาย"
                            false-label= "หญิง"
                            default-label= "เพศ"
                        ></input-toggle>
                    </div> -->
            </panel>
            <button type = "submit">submit</button>
        </form>
    </div>
</template>
<style>
    .padding{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .hr{
        width: 100%; 
        height: 15px; 
        border-bottom: 1px solid #d9d9d9; 
        text-align: left; 
    }
    .hr-label{
        background-color: white; 
        padding: 0 0px;
    }
</style>
<script>
    //components
    import Panel from '../panels/PanelComponent.vue'
    import InputText from '../inputs/InputTextComponent.vue'
    import InputDate from '../inputs/InputDateComponent.vue'
    import InputToggle from '../inputs/InputToggleComponent.vue'
    import InputRadio from '../inputs/InputRadioComponent.vue'
    import InputSelect from '../inputs/InputSelectComponent.vue'
    import InputLineLabel from '../inputs/InputLineLabelComponent.vue'
    export default {
        components: {
            Panel,
            InputText,
            InputDate,
            InputToggle,
            InputRadio,
            InputSelect,
            InputLineLabel,
        },
        data() {
            return {
                document_no : '',
                title_id : '',
                extra_title_id : '',
                first_name : '',
                first_name_eng : '',
                last_name : '',
                last_name_eng : '',
                middle_name : '',
                middle_name_eng : '',
                nickname: '',
                dob : '',
                age : '',
                race: '',
                nation: '',
                religion : '',
                gender : false,
                genders : [
                    { value : '0' , label : 'หญิง' },
                    { value : '1' , label : 'ชาย' },
                ],
                blood_group : '',
                blood_groups : [
                    { value : '0' , label : 'A' },
                    { value : '1' , label : 'B' },
                    { value : '2' , label : 'O' },
                    { value : '3' , label : 'AB' },
                ],
                house_no : '',
                village_no : '',
                lane : '',
                road : '',
                sub_district : '',
                district : '',
                province : '',
                postcode_id : '',
                house_no : '',
                village_no : '',
                lane : '',
                road : '',
                sub_district : '',
                district : '',
                province : '',
                postcode_id : '',
                telephone : '',
                contact_house_no : '',
                contact_village_no : '',
                contact_lane : '',
                contact_road : '',
                contact_sub_district : '',
                contact_district : '',
                contact_province : '',
                contact_postcode_id : '',
                contact_house_no : '',
                contact_village_no : '',
                contact_lane : '',
                contact_road : '',
                contact_sub_district : '',
                contact_district : '',
                contact_province : '',
                contact_postcode_id : '',
                contact_telephone : '',
                job : '4',
                apiJobs: store.jobs,
            }
        },
        created() {
            // this.apiJobs = store.jobs
            // console.log('form created')
        },
        mounted(){

            // console.log(store);
            // this.apiJobs = store.jobs
            // console.log('form mounted')
            // axios.post('/get-jobs-api')
            //     .then((response) => {
            //         this.apiJobs = response.data
            // })
            
        },
    }
</script>

