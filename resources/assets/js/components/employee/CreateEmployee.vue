<template>

    <div class = "container">
        <br>
            <form action="/test-form" method="POST">
            <panel
                title = "ประวัติส่วนตัว">
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text
                            @update="(value) => employeeApi(value)"
                            name = "ref_id"
                            label = "รหัสพนักงาน :"
                            v-model = "ref_id"
                            pattern= "^100([0-9]{5})$"
                            error-text = "รหัสพนักงานไม่ถูกต้อง"
                            :required="true"
                        ></input-text>
                    </div>
                    <div class ="col-md-8">
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text
                            name = "document_no"
                            label = "เลขบัตรประชาชน :"
                            v-model = "document_no"
                            pattern= "^([0-9]{13})$"
                            error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                            :required="false"
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
                        <input-select
                            label = "เชื้อชาติ : "
                            option_start_name = "เลือกเชื้อชาติ"
                            v-model = "race"
                            name = "race"
                            :options = "apiRaces"
                        ></input-select>
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
                        <div class = "col-md-6">
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
                        <auto-complete
                            @update="(item) => updatePostcodeId(item)"
                            v-model = "postcode"
                            label = "รหัสไปรษณีย์ :"
                            name = "postcode"
                            >
                        </auto-complete>
                    </div>
                    <div class ="col-md-4">
                        <input-text
                            name = "sub_district"
                            label = "ตำบล/แขวง :"
                            v-model = "sub_district"
                            :readonly="true"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text
                            name = "district"
                            label = "อำเภอ :"
                            v-model = "district"
                            readonly=true
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text
                            name = "province"
                            label = "จังหวัด :"
                            v-model = "province"
                            readonly=true
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
                <div class="row">
                    <div class ="col-md-4">
                        <input-checkbox
                            @update="(checked) => updateContactAddress(checked)"
                            label = "ใช้ที่อยู่เดียวกันกับที่อยู่ตามทะเบียนบ้าน"
                        ></input-checkbox>
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
                        <auto-complete
                            @update="(item) => updateContractPostcodeId(item)"
                            v-model = "contact_postcode"
                            label = "รหัสไปรษณีย์ :"
                            name = "contact_postcode"
                            url = "/get-autocomplete/postcode"
                            >
                        </auto-complete>
                    </div>
                    <div class ="col-md-4">
                        <input-text
                            name = "contact_sub_district"
                            label = "ตำบล/แขวง :"
                            v-model = "contact_sub_district"
                        ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-4">
                        <input-text
                            name = "contact_district"
                            label = "อำเภอ :"
                            v-model = "contact_district"    
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
                        <input-text
                            name = "contact_province"
                            label = "จังหวัด :"
                            v-model = "contact_province"
                        ></input-text>
                    </div>
                    <div class ="col-md-4">
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
            </panel>
            
            <button type = "submit">submit</button>
        <div>
    </div>
        </form>

    <div>
    </div><br><br><br><br><br><br>
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
    import InputCheckbox from '../inputs/InputCheckboxComponent.vue'
    import InputLineLabel from '../inputs/InputLineLabelComponent.vue'
    import AutoComplete from '../inputs/AutoCompleteComponent.vue'
    export default {
        components: {
            Panel,
            InputText,
            InputDate,
            InputToggle,
            InputCheckbox,
            InputRadio,
            InputSelect,
            InputLineLabel,
            AutoComplete,
        },
        data() {
            return {
                ref_id : '',
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
                apiRaces : null,
                nation: '',
                religion : '',
                gender : '',
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
                postcode : '',
                telephone : '',
                contact_house_no : '',
                contact_village_no : '',
                contact_lane : '',
                contact_road : '',
                contact_sub_district : '',
                contact_district : '',
                contact_province : '',
                contact_postcode_id : '',
                contact_postcode : '',
                contact_house_no : '',
                contact_village_no : '',
                contact_lane : '',
                contact_road : '',
                contact_sub_district : '',
                contact_district : '',
                contact_province : '',
                contact_postcode_id : '',
                contact_telephone : '',
                apiJobs: store.jobs,
                autoComplete: null
            }
        },
        created() {
        },
        methods: {
            updatePostcodeId(item){
	            this.postcode_id = item.data;
	            let location = item.value.split(' ');
	            this.province = location[3];
	            this.district = location[2];
                this.sub_district = location[1];
	            this.postcode = location[0];
            },
            updateContractPostcodeId(item){
                this.contact_postcode_id = item.data;
	            let location = item.value.split(' ');
	            this.contact_province = location[3];
	            this.contact_district = location[2];
                this.contact_sub_district = location[1];
	            this.contact_postcode = location[0];
            },
            employeeApi(value){
               this.ref_id = value
               axios.post('/get-user',{
                   id : this.ref_id
               })
               .then((response) => {
                    console.log(response);
                    this.document_no = response.data.document_id;
                    let name = response.data.name.split(' ');
                    if (name.length == 3 ){
                        this.first_name = name[0];
                        this.middle_name = name[1];
                        this.middle_name = name[2];
                    }else{
                        this.first_name = name[0];
                        this.last_name = name[1];
                    }
                   
                    let name_en = response.data.name_en.split(' ');
                    if (name_en.length == 3 ){
                        this.first_name = name_en[0];
                        this.middle_name = name_en[1];
                        this.middle_name = name_en[2];
                    }else{
                        this.first_name = name_en[0];
                        this.last_name = name_en[1];
                    }
               })
               .catch((error) => {
                    console.log(error);
                })
            },
            updateContactAddress(checked) {
                if(checked){
                    this.contact_house_no = this.house_no;
                    this.contact_village_no = this.village_no;
                    this.contact_lane = this.lane;
                    this.contact_road = this.road;
                    this.contact_sub_district = this.sub_district;
                    this.contact_district = this.district;
                    this.contact_province = this.province;
                    this.contact_postcode = this.postcode;
                    this.contact_postcode_id = this.postcode_id;
                }else{
                    this.contact_house_no = '';
                    this.contact_village_no = '';
                    this.contact_lane = '';
                    this.contact_road = '';
                    this.contact_sub_district = '';
                    this.contact_district = '';
                    this.contact_province = '';
                    this.contact_postcode = '';
                    this.contact_postcode_id = '';
                }
            }

        }
    }
</script>
