<template>
    <div class = "container-fuild col-md-12">
        <br>
            <!-- <panel title = "ประวัติบุคลากร">
                <div class = "row">
                    <div class = "col-md-3 col-sm-4">
                        <file-input
                            name = "emp_picture"
                            label = "รูปถ่ายพนักงาน :"
                            v-model= "emp_picture"
                            :preview= "true"
                        >
                        </file-input>
                    </div>
                    <div class = "col-md-9">
                        <div class = "row">
                            <div class ="col-md-4">
                                <input-text
                                    @update="(value) => employeeApi(value)"
                                    name = "emp_ref_id"
                                    label = "รหัสพนักงาน :"
                                    v-model = "emp_ref_id"
                                    pattern= "^100([0-9]{5})$"
                                    error-text = "รหัสพนักงานไม่ถูกต้อง"
                                    :required="true"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_document_no"
                                    label = "เลขบัตรประชาชน :"
                                    v-model = "emp_document_no"
                                    pattern= "^([0-9]{13})$"
                                    error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                    :required="false"
                                ></input-text>
                            </div>
                            <div class = "col-md-4">
                                <div class = "paddings">
                                    <input-radio
                                        @update="(item,apiName) => updateGender(item,apiName)"
                                        name = "emp_gender"
                                        label = "เพศ :"
                                        v-model = "emp_gender"
                                        :options = "genders"
                                        api-name = "empPrefixApi"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <input-select
                                    label = "คำนำหน้าชื่อ : "
                                    option_start_name = "เลือกคำนำหน้า"
                                    v-model = "emp_prefix_id"
                                    name = "emp_prefix_id"
                                    :options = "empPrefixApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_extra_prefix_id"
                                    label = "ยศ/ตำแหน่ง :"
                                    v-model = "emp_extra_prefix_id"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_position_id"
                                    label = "ตำแหน่งทางวิชาการ :"
                                    v-model = "emp_position_id"
                                    :required="false"
                                    :readonly="true"
                                    ></input-text>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_firstname"
                                            label = "ชื่อจริง :"
                                            v-model = "emp_firstname"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_middlename"
                                            label = "ชื่อกลาง :"
                                            v-model = "emp_middlename"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_lastname"
                                            label = "นามสกุล :"
                                            v-model = "emp_lastname"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_prefix_eng"
                                            label = "คำนำหน้าชื่อ (อังกฤษ):"
                                            v-model = "emp_prefix_eng"
                                            :readonly="true"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_extra_prefix_eng"
                                            label = "ยศ/ตำแหน่ง (อังกฤษ):"
                                            v-model = "emp_extra_prefix_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_position_eng_id"
                                            label = "ตำแหน่งทางวิชาการ (อังกฤษ) :"
                                            v-model = "emp_position_eng_id"
                                            :required="false"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_firstname_eng"
                                            label = "ชื่อจริง (อังกฤษ):"
                                            v-model = "emp_firstname_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_middlename_eng"
                                            label = "ชื่อกลาง (อังกฤษ):"
                                            v-model = "emp_middlename_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_lastname_eng"
                                            label = "นามสกุล (อังกฤษ):"
                                            v-model = "emp_lastname_eng"
                                        ></input-text>
                                    </div>
                                </div>
                            <div class = "row">
                                <div class ="col-md-4">
                                        <input-radio
                                            name = "emp_work_status"
                                            label = "สถานภาพการปฏิบัติงาน :"
                                            v-model = "emp_work_status"
                                            :options = "work_statuses"
                                        />
                                </div>
                                <div class="col-md-4">
                                    <input-select
                                        label = "ประเภทของสถานภาพ : "
                                        option_start_name = "เลือกประเภทของสถานภาพ"
                                        v-model = "emp_work_type"
                                        name = "emp_work_type"
                                    ></input-select>
                                </div>
                                <div class="col-md-4">
                                    <input-select
                                        label = "ประเภทของสถานภาพ : "
                                        option_start_name = "เลือกประเภทของสถานภาพ"
                                        v-model = "emp_work_type"
                                        name = "emp_work_type"
                                    ></input-select>
                                </div>
                            </div>
                    </div>
                </div>
            </panel> -->
            <panel title = "ข้อมูลบุคลากร">
                <div class="row">
                   <div class="col-md-5 col-md-push-0 col-sm-5 col-sm-push-0 col-xs-6 col-xs-push-3 padding">
                        <div class="pull-right"><img
                            :src="'/storage/01.jpeg'"
                            class="img-thumbnail"
                            alt="รูปพนักงาน"
                            height="170"
                            width="170"/>
                        </div>
                    </div>
                     <div class="col-md-5 col-md-push-0 col-sm-6 col-sm-push-0 col-xs-12 padding">
                            <input-text
                                label = "รหัสพนักงาน :"
                                :disabled = "true"
                                name = "emp_ref_id_preview"
                            ></input-text>
                            <input-text
                                label = "ชื่อ - นามสกุล :"
                                :disabled = "true"
                                name = "emp_name_preview"
                            ></input-text>
                            <input-text
                                label = "ชื่อ - นามสกุล (อังกฤษ) :"
                                :disabled = "true"
                                name = "emp_name_eng_preview"
                            ></input-text>
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-12 col-sm-12">
                        <navbar-tabs
                            :options = 'profile_nav'
                        ></navbar-tabs>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="employee_menu" class="tab-pane fade">
                        <div class = "row">
                            <div class ="col-md-4">
                                <input-text
                                    @update="(value) => employeeApi(value)"
                                    name = "emp_ref_id"
                                    label = "รหัสพนักงาน :"
                                    v-model = "emp_ref_id"
                                    pattern= "^100([0-9]{5})$"
                                    error-text = "รหัสพนักงานไม่ถูกต้อง"
                                    :required="true"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_document_no"
                                    label = "เลขบัตรประชาชน :"
                                    v-model = "emp_document_no"
                                    pattern= "^([0-9]{13})$"
                                    error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                    :required="false"
                                ></input-text>
                            </div>
                            <div class = "col-md-4">
                                <div class = "paddings">
                                    <input-radio
                                        @update="(item,apiName) => updateGender(item,apiName)"
                                        name = "emp_gender"
                                        label = "เพศ :"
                                        v-model = "emp_gender"
                                        :options = "genders"
                                        api-name = "empPrefixApi"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <input-select
                                    label = "คำนำหน้าชื่อ : "
                                    option_start_name = "เลือกคำนำหน้า"
                                    v-model = "emp_prefix_id"
                                    name = "emp_prefix_id"
                                    :options = "empPrefixApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_extra_prefix_id"
                                    label = "ยศ/ตำแหน่ง :"
                                    v-model = "emp_extra_prefix_id"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_position_id"
                                    label = "ตำแหน่งทางวิชาการ :"
                                    v-model = "emp_position_id"
                                    :required="false"
                                    :readonly="true"
                                    ></input-text>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_firstname"
                                            label = "ชื่อจริง :"
                                            v-model = "emp_firstname"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_middlename"
                                            label = "ชื่อกลาง :"
                                            v-model = "emp_middlename"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_lastname"
                                            label = "นามสกุล :"
                                            v-model = "emp_lastname"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_prefix_eng"
                                            label = "คำนำหน้าชื่อ (อังกฤษ):"
                                            v-model = "emp_prefix_eng"
                                            :readonly="true"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_extra_prefix_eng"
                                            label = "ยศ/ตำแหน่ง (อังกฤษ):"
                                            v-model = "emp_extra_prefix_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_position_eng_id"
                                            label = "ตำแหน่งทางวิชาการ (อังกฤษ) :"
                                            v-model = "emp_position_eng_id"
                                            :required="false"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_firstname_eng"
                                            label = "ชื่อจริง (อังกฤษ):"
                                            v-model = "emp_firstname_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_middlename_eng"
                                            label = "ชื่อกลาง (อังกฤษ):"
                                            v-model = "emp_middlename_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "emp_lastname_eng"
                                            label = "นามสกุล (อังกฤษ):"
                                            v-model = "emp_lastname_eng"
                                        ></input-text>
                                    </div>
                                </div>
                            <div class = "row">
                                <div class = "col-md-4">
                                    <file-input
                                        name = "emp_picture"
                                        label = "รูปถ่ายพนักงาน :"
                                        v-model= "emp_picture"
                                    >
                                    </file-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                    label = "สถานภาพการปฏิบัติงาน"
                                    ></input-line-label>
                                </div>
                            </div>
                            <div class = "row">
                                <div class ="col-md-4">
                                    <input-radio
                                        name = "emp_work_status"
                                        label = ""
                                        v-model = "emp_work_status"
                                        :options = "work_statuses"
                                    />
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-md-4">
                                    <input-select
                                        label = "ประเภทของสถานภาพ : "
                                        option_start_name = "เลือกประเภทของสถานภาพ"
                                        v-model = "emp_work_type"
                                        name = "emp_work_type"
                                    ></input-select>
                                </div>
                                <div class="col-md-4">
                                    <input-select
                                        label = "ประเภทย่อยของสถานภาพ : "
                                        option_start_name = "เลือกประเภทย่อยของสถานภาพ"
                                        v-model = "emp_work_subtype"
                                        name = "emp_work_subtype"
                                    ></input-select>
                                </div>
                        </div>
                    </div>
                    <div id="profile_menu" class="tab-pane fade in active" style="height: 500px; overflow-y: scroll;overflow-x: hidden;">
                        <div class="row">
                            <div class ="col-md-4">
                                <jquery-input-date
                                    name = "emp_dob_preview"
                                    label = "วัน/เดือน/ปีเกิด :"
                                    v-model = "emp_dob_preview"
                                    format="d/m/Y"
                                    mode = "BE"
                                    start-range= '2400'
                                    end-range = '3000'
                                    age-name = "emp_age"
                                    @update="(dob,ageName) => updateAge(dob,ageName)"
                                ></jquery-input-date>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_age"
                                    label = "อายุ :"
                                    v-model = "emp_age"
                                    :readonly="true"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_nickname"
                                    label = "ชื่อเล่น :"
                                    v-model = "emp_nickname"
                                ></input-text>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4">
                                <input-select
                                    label = "เชื้อชาติ : "
                                    option_start_name = "เลือกเชื้อชาติ"
                                    v-model = "emp_race"
                                    name = "emp_race"
                                    :options = "empRacesApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                 <input-select
                                    label = "สัญชาติ : "
                                    option_start_name = "เลือกสัญชาติ"
                                    v-model = "emp_nation"
                                    name = "emp_nation"
                                    :options = "empnationsApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-select
                                    label = "ศาสนา : "
                                    option_start_name = "เลือกศาสนา"
                                    v-model = "emp_religion"
                                    name = "religion"
                                    :options = "empReligionsApi"
                                ></input-select>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "emp_pln"
                                    label = "เลขใบประกอบโรคศิลป์ :"
                                    v-model = "emp_pln"
                                    :required="false"
                                ></input-text>
                            </div>
                            <div class = "col-md-4">
                                <div class = "paddings">
                                    <input-radio
                                        name = "emp_blood"
                                        label = "หมู่เลือด :"
                                        v-model = "emp_blood"
                                        :options = "blood_groups"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-12">
                                <input-line-label
                                    label = "เอกสารประจำตัว"
                                ></input-line-label>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <file-input
                                    name = "emp_id_card"
                                    label = "สำเนาบัตรประชาชน :"
                                    v-model= "emp_id_card"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "emp_house"
                                    label = "สำเนาทะเบียนบ้าน :"
                                    v-model= "emp_house"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "emp_rename"
                                    label = "สำเนาใบเปลี่ยนชื่อ :"
                                    v-model= "emp_rename"
                                >
                                </file-input>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <file-input
                                    name = "emp_foreign"
                                    label = "สำเนาเอกสารใบต่างด้าว :"
                                    v-model= "emp_foreign"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "emp_medicine"
                                    label = "สำเนาใบอนุญาตประกอบโรคศิลป์ :"
                                    v-model= "emp_medicine"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "emp_soldier"
                                    label = "สำเนาเอกสารทางทหาร :"
                                    v-model= "emp_soldier"
                                >
                                </file-input>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col-md-6">
                                <div class="padding-row">
                                    <input-radio
                                        name = "emp_marital_status"
                                        label = "สถานภาพการสมรส : "
                                        v-model = "emp_marital_status"
                                        :options = "marital_statuses"
                                    />
                                </div>
                            </div>
                        </div>
                        <div id="emp_marital_form" style="display:none;">
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                    label = "คู่สมรส"
                                    ></input-line-label>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <input-text
                                        name = "spouse_prefix_id"
                                        label = "คำนำหน้าชื่อ :"
                                        v-model = "spouse_prefix_id"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "spouse_first_name"
                                        label = "ชื่อ :"
                                        v-model = "spouse_first_name"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "spouse_last_name"
                                        label = "นามสกุล :"
                                        v-model = "spouse_last_name"
                                    ></input-text>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <input-text
                                        name = "spouse_document_no"
                                        label = "เลขบัตรประชาชน :"
                                        v-model = "spouse_document_no"
                                        pattern= "^([0-9]{13})$"
                                        error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                        :required="true"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "spouse_passport_no"
                                        label = "เลขหนังสือเดินทาง :"
                                        v-model = "spouse_passport_no"
                                        error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                    ></input-text>
                                </div>
                                <div class = "col-md-4">
                                    <input-select
                                        label = "อาชีพ : "
                                        option_start_name = "เลือกอาชีพ"
                                        v-model = "spouse_career"
                                        name = "spouse_career"
                                        :options = "careersApi"
                                    ></input-select>
                                </div>
                                <div class = "col-md-4">
                                 <jquery-input-date
                                        name = "spouse_marriage_date"
                                        label = "วันที่สมรส/หย่าร้าง :"
                                        v-model = "spouse_marriage_date"
                                        format="d/m/Y"
                                        mode = "BE"
                                        start-range= '2400'
                                        end-range = '3000'
                                    ></jquery-input-date>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "spouse_marriage_no"
                                        label = "เลขที่ใบสมรส/หย่าร้าง :"
                                        v-model = "spouse_marriage_no"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "spouse_marriage"
                                        label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                        v-model= "spouse_marriage"
                                    >
                                    </file-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <file-input
                                        name = "spouse_id_card"
                                        label = "สำเนาบัตรประชาชน :"
                                        v-model= "spouse_id_card"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "spouse_house"
                                        label = "สำเนาทะเบียนบ้าน :"
                                        v-model= "spouse_house"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "spouse_rename"
                                        label = "สำเนาใบเปลี่ยนชื่อ :"
                                        v-model= "spouse_rename"
                                    >
                                    </file-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class = "col-md-4">
                                    <div class = "padding-row">
                                        <input-radio
                                            name = "spouse_status"
                                            label = "สถานะ :"
                                            v-model = "spouse_status"
                                            :options = "statuses"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                        label = "บุตร/ธิดา"
                                    ></input-line-label>
                                </div>
                            </div>
                            <div class = "row">
                            <div class = "col-md-2 col-sm-2 col-xs-2">
                            <input-button 
                                label = "เพิ่มข้อมูลบุตร/ธิดา"
                                iconClass = "fa fa-plus-circle"
                                data-toggle="collapse" 
                                data-target="#child_form"
                            ></input-button>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col-md-12 col-sm-11 col-xs-11">
                                <div id = "child_form" class="col-centered collapse" style="width: 97.5%;border: 1px solid #b3b3b3;border-radius: 8px;border-style :dashed;">
                                    <br/>
                                <div class="row">
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "คำนำหน้าชื่อ : "
                                            option_start_name = "เลือกคำนำหน้า"
                                            v-model = "child_prefix_id"
                                            name = "child_prefix_id"
                                            :options = "childPrefixApi"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "child_first_name"
                                            label = "ชื่อ :"
                                            v-model = "child_first_name"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "child_last_name"
                                            label = "นามสกุล :"
                                            v-model = "child_last_name"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class = "col-md-4">
                                        <div class = "paddings">
                                        <input-radio
                                            @update="(item,apiName) => updateGender(item,apiName)"
                                            name = "child_gender"
                                            label = "เลือกเพศ :"
                                            v-model = "child_gender"
                                            :options = "genders"
                                            api-name = "childPrefixApi"
                                        />
                                        </div>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "child_document_no"
                                            label = "เลขบัตรประชาชน :"
                                            v-model = "child_document_no"
                                            pattern= "^([0-9]{13})$"
                                            error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                            :required="true"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "child_passport_no"
                                            label = "เลขหนังสือเดินทาง :"
                                            v-model = "child_passport_no"
                                            error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class ="col-md-4">
                                        <jquery-input-date
                                            name = "child_dob_preview"
                                            label = "วัน/เดือน/ปีเกิด :"
                                            v-model = "child_dob_preview"
                                            format="d/m/Y"
                                            mode = "BE"
                                            start-range= '2400'
                                            end-range = '3000'
                                            age-name = "child_age"
                                            @update="(dob,ageName) => updateAge(dob,ageName)"
                                        ></jquery-input-date>
                                    </div>
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "child_id_card"
                                            label = "สำเนาบัตรประชาชน :"
                                            v-model= "child_id_card"
                                        >
                                        </file-input>
                                    </div>
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "child_cher"
                                            label = "สำเนาใบรับรองบุตร :"
                                            v-model= "child_cher"
                                        >
                                        </file-input>
                                    </div>
                                </div>
                                <div class = "row">
                                    <input-button 
                                        label = "เพิ่มข้อมูล"
                                        buttonClass = "btn btn-success"
                                        iconClass = "fa fa-save"
                                    ></input-button>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-12 col-centered">
                    <table class="table table-bordered" id = "childs">
                        <thead>
                         <tr>
                                <th 
                                    v-for="(childHeadTable, index) in childHeadTables" 
                                    :key="index" 
                                    style="max-width: 100px;"
                                >
                                    <center>
                                        {{ childHeadTable.label }}
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr v-for="(childData,index) in childsData" :key="index">
                                    <td style="max-width: 10px;word-wrap:break-word;"><center>{{ childData.id }}</center></td>
                                    <td style="max-width: 100px;word-wrap:break-word;"><center>{{ childData.prefix_id + ' ' + childData.first_name + ' ' + childData.last_name}}</center></td>
                                    <td style="max-width: 50px;word-wrap:break-word;"><center>{{ childData.document_id}}</center></td>
                                    <td style="max-width: 10px;word-wrap:break-word;"><center>{{ childData.passport_no }}</center></td>
                                    <td style="max-width: 10px;word-wrap:break-word;"><center>{{ childData.child_dob }}</center></td>
                                    <td style="max-width: 10px;word-wrap:break-word;"><center>ยังไม่รู้</center></td>
                                    <td style="max-width: 10px;word-wrap:break-word;"><center>{{ childData.child_gender}}</center></td>
                                     <td style="max-width: 10px;word-wrap:break-word;"><center></center></td>
                                </tr>
                        </tbody>
                    </table>
                    </div>
                        <div id="parents_menu">
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                        label = "บิดา"
                                    ></input-line-label>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <input-select
                                        label = "คำนำหน้าชื่อ : "
                                        option_start_name = "เลือกคำนำหน้า"
                                        v-model = "father_prefix_id"
                                        name = "father_prefix_id"
                                        :options = "fatherPrefixApi"
                                    ></input-select>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "father_first_name"
                                        label = "ชื่อ :"
                                        v-model = "father_first_name"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "father_last_name"
                                        label = "นามสกุล :"
                                        v-model = "father_last_name"
                                    ></input-text>
                                </div>
                            </div>
                            <div class = "row">
                                <div class ="col-md-4">
                                    <input-text
                                        name = "father_emp_document_no"
                                        label = "เลขบัตรประชาชน :"
                                        v-model = "father_emp_document_no"
                                        pattern= "^([0-9]{13})$"
                                        error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                        :required="false"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "father_passport_no"
                                        label = "เลขหนังสือเดินทาง :"
                                        v-model = "father_passport_no"
                                        error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                    ></input-text>
                                </div>
                                <div class = "col-md-4">
                                    <input-select
                                        label = "อาชีพ : "
                                        option_start_name = "เลือกอาชีพ"
                                        v-model = "father_career"
                                        :options = "careersApi"
                                    ></input-select>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <file-input
                                        name = "father_id_card"
                                        label = "สำเนาบัตรประชาชน :"
                                        v-model= "father_id_card"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "father_house"
                                        label = "สำเนาทะเบียนบ้าน :"
                                        v-model= "father_house"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "father_rename"
                                        label = "สำเนาใบเปลี่ยนชื่อ :"
                                        v-model= "father_rename"
                                    >
                                    </file-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <file-input
                                        name = "father_marriage"
                                        label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                        v-model= "father_marriage"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "father_child_cher"
                                        label = "สำเนาใบรับรองบุตร :"
                                        v-model= "father_child_cher"
                                    >
                                    </file-input>
                                </div>
                                <div class = "col-md-4">
                                    <div class = "paddings">
                                        <input-radio
                                            name = "father_status"
                                            label = "สถานะ :"
                                            v-model = "father_status"
                                            :options = "statuses"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                        label = "มารดา"
                                    ></input-line-label>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <input-select
                                        label = "คำนำหน้าชื่อ : "
                                        option_start_name = "เลือกคำนำหน้า"
                                        v-model = "mother_prefix_id"
                                        name = "mother_prefix_id"
                                        :options = "motherPrefixApi"
                                    ></input-select>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "mother_first_name"
                                        label = "ชื่อ :"
                                        v-model = "mother_first_name"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "mother_last_name"
                                        label = "นามสกุล :"
                                        v-model = "mother_last_name"
                                    ></input-text>
                                </div>
                            </div>
                            <div class = "row">
                                <div class ="col-md-4">
                                    <input-text
                                        name = "mother_emp_document_no"
                                        label = "เลขบัตรประชาชน :"
                                        v-model = "mother_emp_document_no"
                                        pattern= "^([0-9]{13})$"
                                        error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                        :required="false"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "father_passport_no"
                                        label = "เลขหนังสือเดินทาง :"
                                        v-model = "father_passport_no"
                                        error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                    ></input-text>
                                </div>
                                <div class = "col-md-4">
                                    <input-select
                                        label = "อาชีพ : "
                                        option_start_name = "เลือกอาชีพ"
                                        v-model = "mother_career"
                                        :options = "careersApi"
                                    ></input-select>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <file-input
                                        name = "mother_id_card"
                                        label = "สำเนาบัตรประชาชน :"
                                        v-model= "mother_id_card"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "mother_house"
                                        label = "สำเนาทะเบียนบ้าน :"
                                        v-model= "mother_house"
                                    >
                                    </file-input>
                                </div>
                                <div class ="col-md-4">
                                    <file-input
                                        name = "mother_rename"
                                        label = "สำเนาใบเปลี่ยนชื่อ :"
                                        v-model= "mother_rename"
                                    >
                                    </file-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-4">
                                    <file-input
                                        name = "mother_marriage"
                                        label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                        v-model= "mother_marriage"
                                    >
                                    </file-input>
                                </div>
                                <div class = "col-md-4">
                                    <div class = "paddings">
                                        <input-radio
                                            name = "mother_status"
                                            label = "สถานะ :"
                                            v-model = "mother_status"
                                            :options = "statuses"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contact_menu">
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
                                        :readonly="true"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "province"
                                        label = "จังหวัด :"
                                        v-model = "province"
                                        :readonly="true"
                                    ></input-text>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                        label = "ที่อยู่ที่สามารถติดต่อได้"
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
                                        :readonly="true"
                                    ></input-text>
                                </div>
                            </div>
                            <div class = "row">
                                <div class ="col-md-4">
                                    <input-text
                                        name = "contact_district"
                                        label = "อำเภอ :"
                                        v-model = "contact_district"
                                        :readonly="true"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "contact_province"
                                        label = "จังหวัด :"
                                        v-model = "contact_province"
                                        :readonly="true"
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
                            <div class="row">
                                <div class ="col-md-4">
                                    <input-text
                                        name = "telephone"
                                        label = "โทรศัพท์บ้าน :"
                                        v-model = "telephone"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "phone"
                                        label = "โทรศัพท์มือถือ :"
                                        v-model = "phone"
                                    ></input-text>
                                </div>
                               <div class ="col-md-4">
                                    <input-text
                                        name = "mahidol_email"
                                        label = "Email มหิดล :"
                                        v-model = "mahidol_email"
                                    ></input-text>
                                </div>
                            </div>
                            <div class="row">
                             
                                <div class ="col-md-4">
                                    <input-text
                                        name = "first_email"
                                        label = "Email อื่นๆ :"
                                        v-model = "first_email"
                                    ></input-text>
                                </div>
                                <div class ="col-md-4">
                                    <input-text
                                        name = "second_email"
                                        label = "Email อื่นๆ  :"
                                        v-model = "second_email"
                                    ></input-text>
                                </div>
                            </div>
                            <div class="row">
                                <div class ="col-md-12">
                                    <input-line-label
                                        label = "ผู้ติดต่อกรณีฉุกเฉิน"
                                    ></input-line-label>
                                </div>
                            </div>
                            <div class = "row">
                                <div class =  "col-md-4">    
                                    <input-select
                                        label = "คำนำหน้าชื่อ : "
                                        option_start_name = "เลือกคำนำหน้า"
                                        v-model = "emergency_prefix_id"
                                        name = "emergency_prefix_id"
                                        :options = "emergencyPrefixApi"
                                    ></input-select>
                                </div>
                                <div class = "col-md-4">
                                    <input-text
                                        name = "emergency_firstname"
                                        label = "ชื่อ :"
                                        v-model = "emergency_firstname"
                                    ></input-text>
                                </div>
                                <div class = "col-md-4">
                                    <input-text
                                        name = "emergency_lastname"
                                        label = "นามสกุล :"
                                        v-model = "emergency_lastname"
                                    ></input-text>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-md-4">
                                    <input-text
                                        name = "emergency_relation"
                                        label = "เกี่ยวข้องเป็น :"
                                        v-model = "emergency_relation"
                                    ></input-text>
                                </div>
                                <div class = "col-md-4">
                                    <input-text
                                        name = "emergency_telephone"
                                        label = "โทรศัพท์บ้าน :"
                                        v-model = "emergency_telephone"
                                    ></input-text>
                                </div>
                                <div class = "col-md-4">
                                    <input-text
                                        name = "emergency_phone"
                                        label = "โทรศัพท์มือถือ :"
                                        v-model = "emergency_phone"
                                    ></input-text>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="career_menu" class="tab-pane fade">
                        <!-- <div class = "row">
                            <div class ="col-md-4">
                                <input-select
                                    label = "ประเภทการจ้าง : "
                                    option_start_name = "เลือกประเภทการจ้าง"
                                    v-model = "emp_employ_type"
                                    name = "emp_employ_type"
                                    :options = "empEmployTypesApi"
                                ></input-select>
                            </div>
                            <div class = "col-md-4">
                                <input-text
                                    name = "emp_position_id"
                                    label = "รหัสตำแหน่ง :"
                                    v-model = "emp_position_id"
                                ></input-text>
                            </div>
                            <div class = "col-md-4">
                                <input-text
                                    name = "emp_position_frame"
                                    label = "เลขประจำตำแหน่ง/เลขที่อัตรา :"
                                    v-model = "emp_position_frame"
                                ></input-text>
                            </div>
                        </div> -->
                        <!-- <div class = "row">
                             <div class ="col-md-4">
                                <input-select
                                    label = "สายงาน : "
                                    option_start_name = "เลือกสายงาน"
                                    v-model = "emp_work_field"
                                    name = "emp_work_field"
                                    :options = "empWorkFieldsApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-select
                                    label = "ตำแหน่ง : "
                                    option_start_name = "เลือกตำแหน่ง"
                                    v-model = "emp_position_id"
                                    name = "emp_position_id"
                                    :options = "empPositionsApi"
                                ></input-select>
                            </div> -->
                            <!-- <div class ="col-md-4">
                                <jquery-input-date
                                    name = "emp_work_date"
                                    label = "วันที่บรรจุ :"
                                    v-model = "emp_work_date"
                                    format="d/m/Y"
                                    mode = "BE"
                                    start-range= '2400'
                                    end-range = '3000'
                                    age-name = "emp_work_date"
                                ></jquery-input-date>
                            </div>
                            <div class ="col-md-4">
                                <jquery-input-date
                                    name = "emp_work_date"
                                    label = "วันที่โอนย้าย:"
                                    v-model = "emp_work_date"
                                    format="d/m/Y"
                                    mode = "BE"
                                    start-range= '2400'
                                    end-range = '3000'
                                    age-name = "emp_work_date"
                                ></jquery-input-date>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <jquery-input-date
                                    name = "emp_work_date"
                                    label = "วันที่บรรจุเป็นอาจารย์ :"
                                    v-model = "emp_work_date"
                                    format="d/m/Y"
                                    mode = "BE"
                                    start-range= '2400'
                                    end-range = '3000'
                                    age-name = "emp_work_date"
                                ></jquery-input-date>
                            </div>
                            <div class ="col-md-4">
                                <jquery-input-date
                                    name = "emp_work_date"
                                    label = "วันที่มีมติรับเป็นอาจารย์ภาควิชาฯ :"
                                    v-model = "emp_work_date"
                                    format="d/m/Y"
                                    mode = "BE"
                                    start-range= '2400'
                                    end-range = '3000'
                                    age-name = "emp_work_date"
                                ></jquery-input-date>
                            </div>
                            <div class ="col-md-4">
                                <jquery-input-date
                                    name = "emp_work_date"
                                    label = "วันที่เกษียณอายุ:"
                                    v-model = "emp_work_date"
                                    format="d/m/Y"
                                    mode = "BE"
                                    start-range= '2400'
                                    end-range = '3000'
                                    age-name = "emp_work_date"
                                ></jquery-input-date>
                            </div> -->
                        <!-- </div>
                        <div class="row">
                            <div class ="col-md-12">
                                <input-line-label
                                    label = "สถานที่ปฏิบัติงาน"
                                ></input-line-label>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <input-select
                                    label = "หน่วยงาน : "
                                    option_start_name = "เลือกหน่วยงาน"
                                    v-model = "emp_unit_id"
                                    name = "emp_unit_id"
                                    :options = "empUnitApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-select
                                    label = "หน่วยงานย่อย : "
                                    option_start_name = "เลือกหน่วยงานย่อย"
                                    v-model = "emp_subunit_id"
                                    name = "emp_subunit_id"
                                    :options = "empSubunitApi"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-select
                                    label = "สถานที่ปฏิบัติงาน : "
                                    option_start_name = "เลือกสถานที่ปฏิบัติงาน"
                                    v-model = "emp_work_place_id"
                                    name = "emp_work_place_id"
                                    :options = "empWorkPlaceApi"
                                ></input-select>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col-md-4">
                                <input-text
                                    name = "work_place_telephone"
                                    label = "โทรศัพท์ :"
                                    v-model = "work_place_phoneout"
                                ></input-text>
                            </div>
                            <div class = "col-md-4">
                                <input-text
                                    name = "work_place_telephone"
                                    label = "โทรศัพท์ :"
                                    v-model = "work_place_phonein"
                                ></input-text>
                            </div>
                             <div class = "col-md-4">
                                <input-text
                                    name = "work_place_fax"
                                    label = "โทรสาร :"
                                    v-model = "work_place_fax"
                                ></input-text>
                            </div> 
                        </div>
                        <div class = "row">
                            <div class = "col-md-4">
                                <input-text
                                    name = "emp_vpn"
                                    label = "VPN :"
                                    v-model = "emp_vpn"
                                ></input-text>
                            </div> 
                            <div class ="col-md-2 col-xs-4">
                                <jquery-input-date
                                    name = "emp_work_start"
                                    label = "เวลาเริ่มปฏิบัติงาน :"
                                    v-model = "emp_work_start"
                                    format="H:i"
                                    mode = "BE"
                                    :datepicker = "false"
                                    :timepicker="true"
                                ></jquery-input-date>
                            </div>
                            <div class="col-md-3 col-xs-6 col-md-push-0 col-xs-push-0">
                                <div class = "col-md-1 col-xs-1 col-md-push-0 col-xs-push-0 paddings"> - </div>
                                <div class ="col-md-9 col-xs-9">
                                    <jquery-input-date
                                        name = "emp_work_end"
                                        label = "เวลาเลิกปฏิบัติงาน :"
                                        v-model = "emp_work_end"
                                        format="H:i"
                                        mode = "BE"
                                        :datepicker = "false"
                                        :timepicker="true"
                                    ></jquery-input-date>
                                </div>
                            </div>  
                        </div> -->
                    </div>
                    <div id="education_menu" class="tab-pane fade">
                        test
                    </div>
                    <div id="honor_menu" class="tab-pane fade">
                        <div class = "row">
                            <div class = "col-md-2 col-sm-2 col-xs-2">
                            <input-button 
                                label = "เพิ่มข้อมูลรางวัลเกียรติยศ"
                                iconClass = "fa fa-plus-circle"
                                data-toggle="collapse" 
                                data-target="#honor_form"
                            ></input-button>
                            </div>
                        </div>
                        <div class = "row">
                            <div class = "col-md-12 col-sm-11 col-xs-11">
                                <div id = "honor_form" class="col-centered collapse" style="width: 97.5%;border: 1px solid #b3b3b3;border-radius: 8px;border-style :dashed;">
                                    <br/>
                                        <div class = "row">
                                            <div class = "col-md-4">
                                                <input-text
                                                    name = "emp_honor_year"
                                                    label = "ปีพ.ศ.ที่ได้รับรางวัลเกียรติยศ :"
                                                    v-model = "emp_honor_year"
                                                    pattern= "^2([4-9]{1})([0-9]{2})$"
                                                    error-text = "รูปแบบพ.ศ.ไม่ถูกต้อง"
                                                ></input-text>
                                            </div>
                                            <div class = "col-md-4">
                                                <input-text
                                                    name = "emp_honor_name"
                                                    label = "ชื่อรางวัลเกียรติยศ :"
                                                    v-model = "emp_honor_name"
                                                    pattern= "^2([4-9]{1})([0-9]{2})$"
                                                    error-text = "รูปแบบพ.ศ.ไม่ถูกต้อง"
                                                ></input-text>
                                            </div>
                                            <div class = "col-md-4">
                                                <input-select
                                                    label = "ระดับของรางวัลเกียรติยศ : "
                                                    option_start_name = "เลือกระดับของรางวัลเกียรติยศ "
                                                    v-model = "emp_honor_lavel"
                                                    name = "emp_honor_lavel"
                                                    :options = "empHonorLavelApi"
                                                ></input-select>
                                            </div>     
                                        </div>
                                        <div class = "row">
                                            <div class = "col-md-4">
                                                <input-text
                                                    name = "emp_honor_type"
                                                    label = "ด้านของรางวัลเกียรติยศ :"
                                                    v-model = "emp_honor_type"
                                                ></input-text>
                                            </div>
                                            <div class = "col-md-4">
                                                <input-text
                                                    name = "emp_honor_unit"
                                                    label = "หน่วยงานที่มอบรางวัลเกียรติยศ :"
                                                    v-model = "emp_honor_unit"
                                                ></input-text>
                                            </div>
                                        </div>
                                        <div class = "row">
                                            <input-button 
                                                label = "เพิ่มข้อมูล"
                                                buttonClass = "btn btn-success"
                                                iconClass = "fa fa-save"
                                            ></input-button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class = "col-md-12 col-centered">
                            <table class="table table-bordered" id = "childs">
                                <thead>
                                    <tr>
                                        <th ><center>ปีพ.ศ.</center></th>
                                        <th><center>ชื่อรางวัลเกียรติยศ</center></th>
                                        <th><center>ระดับของรางวัลเกียรติยศ</center></th>
                                        <th><center>ด้านของรางวัลเกียรติยศ</center></th>
                                        <th><center>หน่วยงานที่มอบรางวัลเกียรติยศ</center></th>
                                        <th><center>จัดการข้อมูล</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><center></center></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                    </div>
                    
                
                </div>
            </panel>

            <!-- <button type = "submit">submit</button> -->
        <div>
    </div>
    <div>
    </div><br><br><br><br><br><br>
    </div>

</template>
<style>
    .col-centered{
        top : 15px;
        float: none;
        margin: 0 auto;
    }
    .padding-row{
        padding-top: 15px;
        padding-bottom: 15px;
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
    .paddings{
        padding-top: 30px;
        padding-bottom: 30px;
       
    }
    .tab-pane{
        padding-top: 25px;
        padding-bottom: 25px;
        border: 1px solid #D2D0D0;
        border-top:  0px;
	    box-shadow:0 0 20px #D2D0D0;
    }
    @media (max-width: 1200px) {
    .row .col-md-4 > .pull-right {
        float: none !important;
    }
}
</style>
<script>
   //components
    import Panel from '../panels/PanelComponent.vue'
    import InputText from '../inputs/InputTextComponent.vue'
    import InputDate from '../inputs/InputDateComponent.vue'
    import InputPalitday from '../inputs/InputPalitday.vue'
    import InputToggle from '../inputs/InputToggleComponent.vue'
    import InputRadio from '../inputs/InputRadioComponent.vue'
    import InputSelect from '../inputs/InputSelectComponent.vue'
    import InputCheckbox from '../inputs/InputCheckboxComponent.vue'
    import InputLineLabel from '../inputs/InputLineLabelComponent.vue'
    import AutoComplete from '../inputs/AutoCompleteComponent.vue'
    import NavbarTabs from '../inputs/NavbarTabsComponent.vue'
    import FileInput from '../inputs/FileInputComponent.vue'
    import jqueryInputDate from '../inputs/JqueryInputDate.vue'
    import InputButton from '../inputs/InputButtonComponent.vue'
    import InputSelectA from '../inputs/InputSelect.vue'
    import InputTable from '../inputs/InputTableComponent.vue'
    import moment from 'moment';
    export default {
        components: {
            Panel,
            InputText,
            InputDate,
            InputPalitday,
            InputToggle,
            InputCheckbox,
            InputRadio,
            InputSelect,
            InputLineLabel,
            AutoComplete,
            NavbarTabs,
            FileInput,
            jqueryInputDate,
            InputButton,
            InputSelectA,
            InputTable,
        },
        data() {
            return {
                emp_ref_id : '',
                emp_document_no : '',
                emp_gender : null,
                emp_prefix_id : null,
                emp_prefix_eng: '',
                emp_extra_prefix_id : '',
                emp_extra_prefix_eng : '',
                emp_position_id : '',
                emp_position_eng_id : '',
                emp_firstname : '',
                emp_firstname_eng : '',
                emp_lastname : '',
                emp_lastname_eng : '',
                emp_middlename : '',
                emp_middlename_eng : '',
                emp_picture : '',
                emp_work_status : '',
                emp_work_type :  '',
                emp_work_subtype : '',
                emp_work_date : '',
                emp_dob_preview : '',
                emp_dob : '',
                emp_age : '',
                emp_nickname: '',
                emp_race: '',
                empApiRaces : null,
                emp_nation: '',
                emp_religion : '',
                emp_pln : '',
                emp_blood : '',
                emp_id_card : '',
                emp_house : '',
                emp_rename : '',
                emp_foreign : '',
                emp_medicine : '',
                emp_soldier : '',
                emp_marital_status : '',
                empPrefixApi : '',
                empApiRaces : '',
                genders : [
                    { value : '0' , label : 'หญิง'},
                    { value : '1' , label : 'ชาย'},
                ],
                work_statuses : [
                    { value : '0', label : 'ปฏิบัติงาน'},
                    { value : '1', label : 'พ้นสภาพ'},
                ],
                blood_groups : [
                    { value : '0' , label : 'A' },
                    { value : '1' , label : 'B' },
                    { value : '2' , label : 'O' },
                    { value : '3' , label : 'AB' },
                ],
                marital_statuses : [
                    { value : '0' , label : 'โสด' },
                    { value : '1' , label : 'สมรส' },
                    { value : '2' , label : 'หย่าร้าง' },
                    { value : '3' , label : 'หม้าย' },
                ],
                empRacesApi : [ 
                    { value : '0' , label : 'ไทย'},
                    { value : '1' , label : 'จีน'},
                ],
                empnationsApi : [ 
                    { value : '0' , label : 'ไทย'},
                    { value : '1' , label : 'จีน'},
                ],
                empReligionsApi : [
                    { value : '0' , label : 'พุทธ'},
                    { value : '1' , label : 'อิสลาม'},
                    { value : '2' , label : 'คริสต์'} 
                ],
                spouse_prefix_id : '',
                spouse_first_name : '',
                spouse_last_name : '',
                spouse_document_no : '',
                spouse_passport_no : '',
                spouse_status : '',
                statuses : [
                    { value : '0' , label : 'ยังมีชีวิตอยู่' },
                    { value : '1' , label : 'ถึงแก่กรรม' },
                ],
                spouse_career: null,
                spouse_marriage_date : '',
                spouse_marriage_no: '',
                father_prefix_id : '',
                father_first_name : '',
                father_last_name : '',
                father_emp_document_no : '',
                father_career : null,
                father_status : '',
                father_marital_status :  '',
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
                careersApi: '',
                autoComplete: null,
                profile_nav : [
                    { value : '#employee_menu' , label : 'ประวัติบุคลากร', icon : 'fa fa-id-card' , class : '' },
                    { value : '#profile_menu' , label : 'ประวัติส่วนตัว', icon : 'fa fa-user-circle-o' , class : 'active' },
                    { value : '#career_menu' , label : 'ประวัติการทำงาน', icon : 'fa fa-id-badge', class : ''},
                    { value : '#education_menu' , label : 'ประวัติการศึกษา', icon : 'fa fa-graduation-cap', class : '' },
                    { value : '#taining_menu' , label : 'ประวัติการลาศึกษา/อบรม', icon : 'fa fa-plane', class : ''},
                    { value : '#taining_menu' , label : 'ประวัติการรับราชการ', icon : 'fa fa-briefcase', class : ''},
                    { value : '#insignia_menu' , label : 'ประวัติการรับเครื่องราชฯ', icon : 'fa fa-star', class : ''},
                    { value : '#honor_menu' , label : 'ประวัติเกียรติยศ', icon : 'fa fa-trophy', class : ''},
                    { value : '#manager_menu' , label : 'ตำแหน่งบริหาร', icon : 'fa fa-handshake-o', class : ''},
                ],
                spouse_id_card : '',
                spouse_house : '',
                spouse_rename : '',
                spouse_marriage_date : '',
                spouse_marriage_no: '',
                spouse_marriage : '',
                father_id_card : '',
                father_passport_no : '',
                father_house : '',
                father_rename : '',
                father_marriage : '',
                father_child_cher : '',
                fatherPrefixApi : '',
                mother_prefix_id : '',
                mother_first_name : '',
                mother_last_name : '',
                mother_emp_document_no : '',
                mother_career : '',
                mother_status : '',
                mother_id_card : '',
                mother_house : '',
                mother_rename : '',
                mother_marriage : '',
                mother_marital_status :  '',
                motherPrefixApi : '',
                phone : '',
                office_telephone : '',
                mahidol_email : '',
                first_email : '',
                second_email : '',
                child_prefix_id: '',
                child_first_name : '',
                child_last_name: '',
                child_document_no: '',
                child_passport_no : '',
                child_dob:'',
                child_dob_preview : '',
                child_marital_status: '',
                prefixUrl : '',
                child_chertificate : '',
                child_gender : '',
                child_age : '',
                child_cher : '',
                child_id_card : '',
                childPrefixApi : '',
                emergency_prefix_id : '',
                emergency_firstname : '',
                emergency_lastname : '',
                emergency_gender: '',
                emergency_relation : '',
                emergency_telephone : '',
                emergency_phone : '',
                emergencyPrefixApi : '',
                emp_honor_year : '',
                emp_honor_name : '',
                emp_honor_lavel : '',
                emp_honor_type : '',
                emp_honor_unit : '',
                empHonorLavelApi : [
                    { value : '0', label : 'ระดับชาติ' },
                    { value : '0', label : 'ระดับนานาชาติ'}
                ],
                childHeadTables : [
                    { value : '0', label : 'คนที่' },
                    { value : '1' , label : 'ชื่อ-นามสกุล' },
                    { value : '2' , label : 'เลขบัตรประชาชน' },
                    { value : '3' , label : 'เลขหนังสือเดินทาง' },
                    { value : '4' , label : 'วัน/เดือน/ปีเกิด' },
                    { value : '5' , label : 'อายุ' },
                    { value : '6' , label : 'เพศ' },
                    { value : '7' , label : 'จัดการข้อมูล' },	

                ],
                childsData : [
                    { id : '1' , prefix_id : 'นางสาว' , first_name : 'นงนภัส' , last_name : 'สำแดงเดช', document_id : '1100800997121', passport_no : '1100800997121', child_dob: '12/09/1994', child_gender : '0'}
                ]

            }
        },
        watch:{
            emp_prefix_id(emp_prefix_id){
                if (emp_prefix_id !== ''){
                    let title = this.prefixApi.find((item) => {
                        return item.value == emp_prefix_id
                    })
                    this.emp_prefix_eng = (title.name_eng);
                }
            },
            emp_gender(emp_gender){
                this.empPrefixApi = '';
                this.emp_prefix_id = '';
                this.emp_prefix_eng = '';
            },
            emp_marital_status(emp_marital_status){
                if (emp_marital_status == '' || emp_marital_status == 0){
                    $('#emp_marital_form').slideUp('slow'); 
                }else{
                    $('#emp_marital_form').slideDown('slow'); 
                }
            },
            emergency_gender(emergency_gender){
                this.emergencyPrefixApi = '';
                this.emergency_prefix_id = '';
            },

        },
        created() {
              // get defautl prefix filter by female gender
            axios.get('get-list/prefix-female')
                .then((response) => {
                    this.prefixApi = response.data;
                    this.childPrefixApi = response.data;
                    this.emergencyPrefixApi = response.data;
                    this.motherPrefixApi = response.data;
                })
                .catch((error)=> { console.log(error) });
            // get careers
            axios.get('get-list/career')
                .then((response) => {
                    this.careersApi = response.data;

                })
                .catch((error)=> { console.log(error) });
              // get defautl prefix filter by male gender
            axios.get('get-list/prefix-male')
                .then((response) => {
                    this.fatherPrefixApi = response.data;
                })
                .catch((error)=> { console.log(error) });
        },
        mounted() {
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
               this.emp_ref_id = value
               axios.post('/get-user',{
                   id : this.emp_ref_id
               })
               .then((response) => {
                    console.log(response);
                    this.emp_document_no = response.data.document_id;
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
                        this.first_name_eng = name_en[0];
                        this.middle_name_eng = name_en[1];
                        this.middle_name_eng = name_en[2];
                    }else{
                        this.first_name_eng = name_en[0];
                        this.last_name_eng = name_en[1];
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
            },
            updateGender(value,apiName){
                if (apiName!== ''){
                    this.url = value == 0 ? 'prefix-female' : 'prefix-male';
                    axios.get('get-list/' + this.url)
                    .then((response) => {
                        this[apiName] = response.data;
                    })
                    .catch((error) => {
                        console.log(error);
                    });
                }
            },
            updateAge(dob,ageName){
                var current_year = moment().format('YYYY');
                var age = dob.split('/');
                this.dob = dob;
                this[ageName] = current_year - age[2] + ' ปี';
            },
        }
    }
</script>
