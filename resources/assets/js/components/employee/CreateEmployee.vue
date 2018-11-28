<template>
    <div>
    <navbar-component></navbar-component>
    <div class = "container-fuild col-md-12">
                    <panel title = "ข้อมูลบุคลากร">
                        <div class="row col-md-12" style="font-size:16px;padding-bottom:15px;">
                             <table class="responsive-card-table" style="width:100%;">
                                <tr>
                                    <th rowspan="6" style="width:30%;">                            
                                        <div style="text-align:center;"><img
                                            :src="'01.jpeg'"
                                            class="img-thumbnail"
                                            alt="รูปพนักงาน"
                                            height="160"
                                            width="160"/>
                                        </div>
                                    </th>
                                    <td><b>รหัสพนักงาน : </b> 10000702</td>
                                </tr>
                                <tr>
                                    <td><b>ชื่อ-สกุล (ไทย) : </b>รศ.ดร.พญ.บุคลากร เวลาพักตร์</td>
                                    <td><b>ชื่อ-สกุล (อังกฤษ) : </b>รศ.ดร.พญ.Bukarakorn Welapak</td>
                                </tr>
                                <tr>
                                    <td><b>ประเภทการจ้าง : </b>พนักงานมหาวิทยาลัย</td>
                                    <td><b>ตำแหน่ง : </b>อาจารย์</td>
                                </tr>
                                <tr>
                                    <td><b>วันที่บรรจุ : </b>01/06/2547</td>
                                    <td><b>อายุงาน : </b>15 ปี</td>
                                </tr>
                                <tr>
                                    <td><b>วันที่โอนย้าย : </b></td>
                                    <td><b>วันที่มีมติเป็นอาจารย์ : </b>12/05/2547</td>
                                </tr>
                                <tr>
                                    <td><b>วันที่ครบรอบ 25 ปี : </b>01/06/2572</td>
                                    <td><b>วันที่ครบรอบ 65 ปี : </b>01/06/2577</td>
                                </tr>      
                            </table>
                        </div>
                        <div class = "row">
                            <div class ="col-md-12 col-sm-12">
                                <navbar-tabs
                                    :options = 'profile_nav'
                                ></navbar-tabs>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="employee_menu" class="tab-pane fade" style="max-max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
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
                                    <div class = "col-md-4">
                                        <div class = "paddings">
                                            <input-radio
                                                @update="(item,radioName,apiName,value) => updateGender(item,radioName,apiName,value)"
                                                name = "gender"
                                                label = "เพศ :"
                                                v-model = "gender"
                                                :options = "genders"
                                                api-name = "empPrefixApi"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "col-md-4">
                                        <file-input
                                            name = "picture"
                                            label = "รูปถ่ายพนักงาน :"
                                            v-model= "picture"
                                            data-preview="false"
                                        >
                                        </file-input>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "คำนำหน้าชื่อ : "
                                            option_start_name = "เลือกคำนำหน้า"
                                            v-model = "prefix_id"
                                            name = "prefix_id"
                                            :options = "empPrefixApi"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            name = "extra_prefix_id"
                                            option_start_name = "เลือกยศทางทหาร/ตำรวจ"
                                            label = "ยศทางทหาร/ตำรวจ :"
                                            v-model = "extra_prefix_id"
                                        ></input-select>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class ="col-md-4">
                                        <input-select
                                            name = "position_id"
                                            option_start_name = "เลือกตำแหน่งทางวิชาการ"
                                            label = "ตำแหน่งทางวิชาการ :"
                                            v-model = "position_id"
                                            ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "ตำแหน่งทางวุฒิการศึกษา : "
                                            option_start_name = "เลือกตำแหน่งทางวุฒิการศึกษา"
                                            v-model = "education_prefix"
                                            name = "education_prefix"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "ตำแหน่งทางวิชาชีพ : "
                                            option_start_name = "เลือกตำแหน่งทางวิชาชีพ"
                                            v-model = "profession_prefix"
                                            name = "profession_prefix"
                                        ></input-select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "firstname"
                                            label = "ชื่อจริง :"
                                            v-model = "firstname"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "middlename"
                                            label = "ชื่อกลาง :"
                                            v-model = "middlename"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "lastname"
                                            label = "นามสกุล :"
                                            v-model = "lastname"
                                        ></input-text>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "firstname_eng"
                                            label = "ชื่อจริง (อังกฤษ):"
                                            v-model = "firstname_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "middlename_eng"
                                            label = "ชื่อกลาง (อังกฤษ):"
                                            v-model = "middlename_eng"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "lastname_eng"
                                            label = "นามสกุล (อังกฤษ):"
                                            v-model = "lastname_eng"
                                        ></input-text>
                                    </div>
                                </div>
                                    <div class = "row">
                                        <div class ="col-md-4">
                                            <div class = "paddings">
                                            <input-radio
                                                name = "work_status"
                                                label = "สถานภาพ : "
                                                v-model = "work_status"
                                                :options = "work_statuses"
                                                @update="(item,radioName,apiName,value) => updateStatus(item,radioName,apiName,value)"
                                                api-name="workStatusApi"
                                            />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input-select
                                                label = "ประเภทของสถานภาพ : "
                                                option_start_name = "เลือกประเภทของสถานภาพ"
                                                v-model = "work_type"
                                                name = "work_type"
                                                :options = "workStatusApi"
                                            ></input-select>
                                        </div>
                                            <div id = "unemploy_date" style="display:none;">
                                                <div class = "col-md-4">
                                                    <jquery-input-date
                                                        name = "unemploy_date"
                                                        label = "วันที่พ้นสภาพ :"
                                                        v-model = "unemploy_date"
                                                        format="d/m/Y"
                                                        mode = "BE"
                                                        start-range= '2400'
                                                        end-range = '3000'
                                                        age-name = "unemploy_date"
                                                    ></jquery-input-date>
                                                </div>
                                            </div>
                                    </div>
                                    <div class = "row padding">
                                        <div class="col-md-12">
                                            <div class="form-group col-xs-12">
                                                <center>
                                                    <input-button 
                                                        label = "บันทึกข้อมูล"
                                                        buttonClass = "btn btn-success"
                                                        iconClass = "fa fa-save"
                                                    ></input-button>
                                                    <input-button 
                                                        label = "ยกเลิกการบันทึก"
                                                        buttonClass = "btn btn-danger"
                                                        iconClass = "fa fa-ban"
                                                    ></input-button>   
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div id="profile_menu" class="tab-pane fade in active" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class="row">
                                    <div class ="col-md-4">
                                        <jquery-input-date
                                            name = "dob_preview"
                                            label = "วัน/เดือน/ปีเกิด :"
                                            v-model = "dob_preview"
                                            format="d/m/Y"
                                            mode = "BE"
                                            start-range= '2400'
                                            end-range = '3000'
                                            age-name = "age"
                                            en-date = "dob"
                                            @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                        ></jquery-input-date>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "age"
                                            label = "อายุ :"
                                            v-model = "age"
                                            :readonly="true"
                                        ></input-text>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "nickname"
                                            label = "ชื่อเล่น :"
                                            v-model = "nickname"
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
                                            :options = "empRacesApi"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "สัญชาติ : "
                                            option_start_name = "เลือกสัญชาติ"
                                            v-model = "nation"
                                            name = "nation"
                                            :options = "empnationsApi"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "ศาสนา : "
                                            option_start_name = "เลือกศาสนา"
                                            v-model = "religion"
                                            name = "religion"
                                            :options = "empReligionsApi"
                                        ></input-select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class ="col-md-4">
                                        <input-text
                                            name = "pln"
                                            label = "เลขใบประกอบโรคศิลป์ :"
                                            v-model = "pln"
                                            :required="false"
                                        ></input-text>
                                    </div>
                                    <div class = "col-md-4">
                                        <div class = "paddings">
                                            <input-radio
                                                name = "blood"
                                                label = "หมู่เลือด :"
                                                v-model = "blood"
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
                                            name = "id_card"
                                            label = "สำเนาบัตรประชาชน :"
                                            v-model= "id_card"
                                        >
                                        </file-input>
                                    </div>
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "house"
                                            label = "สำเนาทะเบียนบ้าน :"
                                            v-model= "house"
                                        >
                                        </file-input>
                                    </div>
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "rename"
                                            label = "สำเนาใบเปลี่ยนชื่อ :"
                                            v-model= "rename"
                                        >
                                        </file-input>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "foreign"
                                            label = "สำเนาเอกสารใบต่างด้าว :"
                                            v-model= "foreign"
                                        >
                                        </file-input>
                                    </div>
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "medicine"
                                            label = "สำเนาใบอนุญาตประกอบโรคศิลป์ :"
                                            v-model= "medicine"
                                        >
                                        </file-input>
                                    </div>
                                    <div class ="col-md-4">
                                        <file-input
                                            name = "soldier"
                                            label = "สำเนาเอกสารทางทหาร :"
                                            v-model= "soldier"
                                        >
                                        </file-input>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "col-md-6">
                                        <div class="padding-row">
                                            <input-radio
                                                name = "marital_status"
                                                label = "สถานภาพการสมรส : "
                                                v-model = "marital_status"
                                                :options = "marital_statuses"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div id="marital_form" style="display:none;">
                                    <div class="row">
                                        <div class ="col-md-12">
                                            <input-line-label
                                            label = "คู่สมรส"
                                            ></input-line-label>
                                        </div>
                                    </div>
                                        <div class="row">
                                                <div class = "col-md-4">
                                                    <div class = "padding">
                                                    <input-radio
                                                        @update="(item,radioName,apiName,value) => updateGender(item,radioName,apiName,value)"
                                                        name = "spouse_gender"
                                                        label = "เลือกเพศ :"
                                                        v-model = "spouse_gender"
                                                        :options = "genders"
                                                        api-name = "spousePrefixApi"
                                                    />
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="row">
                                        <div class ="col-md-4">
                                            <input-select
                                                label = "คำนำหน้าชื่อ : "
                                                option_start_name = "เลือกคำนำหน้าชื่อ"
                                                v-model = "spouse_prefix_id"
                                                name = "spouse_prefix_id"
                                                :options = "spousePrefixApi"
                                            ></input-select>
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
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "spouse_document_file"
                                                label = "สำเนาบัตรประชาชน :"
                                                v-model= "spouse_document_file"
                                            >
                                            </file-input>
                                        </div>
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "spouse_house_file"
                                                label = "สำเนาทะเบียนบ้าน :"
                                                v-model= "spouse_house_file"
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
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "spouse_marriage_file"
                                                label = "สำเนาทะเบียนสมรส :"
                                                v-model= "spouse_marriage_file"
                                            >
                                            </file-input>
                                        </div>
                                        <div class = "col-md-4">
                                            <jquery-input-date
                                                name = "spouse_marriage_preview"
                                                label = "วันที่สมรส :"
                                                v-model = "spouse_marriage_preview"
                                                format="d/m/Y"
                                                mode = "BE"
                                                start-range= '2400'
                                                end-range = '3000'
                                                en-date="spouse_marriage_date"
                                                @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                            ></jquery-input-date>
                                        </div>
                                    </div>
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
                                                name = "father_document_no"
                                                label = "เลขบัตรประชาชน :"
                                                v-model = "father_document_no"
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
                                                name = "father_document_file"
                                                label = "สำเนาบัตรประชาชน :"
                                                v-model= "father_document_file"
                                            >
                                            </file-input>
                                        </div>
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "father_house_file"
                                                label = "สำเนาทะเบียนบ้าน :"
                                                v-model= "father_house_file"
                                            >
                                            </file-input>
                                        </div>
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "father_rename_file"
                                                label = "สำเนาใบเปลี่ยนชื่อ :"
                                                v-model= "father_rename_file"
                                            >
                                            </file-input>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "father_chile_file"
                                                label = "สำเนาใบรับรองบุตร :"
                                                v-model= "father_chile_file"
                                            >
                                            </file-input>
                                        </div>
                                        <div class ="col-md-4">
                                            <file-input
                                                name = "father_marriage_file"
                                                label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                                v-model= "father_marriage_file"
                                            >
                                            </file-input>
                                        </div>
                                        <div class = "col-md-4">
                                                <jquery-input-date
                                                    name = "father_marriage_preview"
                                                    label = "วันที่สมรส/หย่าร้าง :"
                                                    v-model = "father_marriage_preview"
                                                    format="d/m/Y"
                                                    mode = "BE"
                                                    start-range= '2400'
                                                    end-range = '3000'
                                                    en-date="father_marriage_date"
                                                    @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                ></jquery-input-date>
                                        </div>
                                    </div>
                                    <div class = "row">
                                        <div class = "col-md-4">
                                            <div class = "padding">
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
                                                name = "mother_document_no"
                                                label = "เลขบัตรประชาชน :"
                                                v-model = "mother_document_no"
                                                pattern= "^([0-9]{13})$"
                                                error-text="เลขบัตรประชาชนไม่ถูกต้อง"
                                                :required="false"
                                            ></input-text>
                                        </div>
                                        <div class ="col-md-4">
                                            <input-text
                                                name = "mother_passport_no"
                                                label = "เลขหนังสือเดินทาง :"
                                                v-model = "mother_passport_no"
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
                                        <div class = "col-md-4">
                                            <div class = "padding">
                                                <input-radio
                                                    name = "mother_status"
                                                    label = "สถานะ :"
                                                    v-model = "mother_status"
                                                    :options = "statuses"
                                                />
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
                                                <div class="form-group col-xs-12">    
                                                    <input-button 
                                                        label = "เพิ่มข้อมูลบุตร/ธิดา"
                                                        iconClass = "fa fa-plus-circle"
                                                        data-toggle="collapse" 
                                                        data-target="#child_form"
                                                    ></input-button>
                                                </div>    
                                            </div>
                                        </div>
                                    <div class = "row">
                                        <div class = "col-md-12 col-sm-11 col-xs-11">
                                            <form-dashed
                                                id = "child_form"
                                            >
                                                <div class="row">
                                                    <div class = "col-md-4">
                                                        <div class = "padding">
                                                        <input-radio
                                                            @update="(item,radioName,apiName,value) => updateGender(item,radioName,apiName,value)"
                                                            name = "child_gender"
                                                            label = "เลือกเพศ :"
                                                            v-model = "child_gender"
                                                            :options = "genders"
                                                            api-name = "childPrefixApi"
                                                        />
                                                        </div>
                                                    </div>
                                                </div>
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
                                                            en-date="child_dob"
                                                            @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                        ></jquery-input-date>
                                                    </div>
                                                </div>
                                                <div class = "row">
                                                    <div class="col-md-12">
                                                        <div class="form-group col-xs-12">
                                                            <center>
                                                                <input-button 
                                                                    label = "บันทึก"
                                                                    buttonClass = "btn btn-success"
                                                                    iconClass = "fa fa-save"
                                                                ></input-button>
                                                                <input-button 
                                                                    label = "ยกเลิก"
                                                                    buttonClass = "btn btn-danger"
                                                                    iconClass = "fa fa-ban"
                                                                ></input-button>   
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form-dashed>
                                        </div>
                                    </div>
                                <div class = "col-md-12 col-centered">
                                    <input-table
                                        name = "childs_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "childsHeadRows"
                                        :rows = "childRows"
                                    ></input-table>
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
                                                label = "อำเภอ/เขต :"
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
                                    <div class = "col-md-4">
                                            <div class = "padding">
                                                <input-radio
                                                    @update="(item,radioName,apiName,value) => updateGender(item,radioName,apiName,value)"
                                                    name = "emergency_gender"
                                                    label = "เลือกเพศ :"
                                                    v-model = "emergency_gender"
                                                    :options = "genders"
                                                    api-name = "emergencyPrefixApi"
                                                />
                                            </div>
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
                                    <div class = "row padding">
                                        <div class="col-md-12">
                                            <div class="form-group col-xs-12">
                                                <center>
                                                    <input-button 
                                                        label = "บันทึกข้อมูล"
                                                        buttonClass = "btn btn-success"
                                                        iconClass = "fa fa-save"
                                                    ></input-button>
                                                    <input-button 
                                                        label = "ยกเลิกการบันทึก"
                                                        buttonClass = "btn btn-danger"
                                                        iconClass = "fa fa-ban"
                                                    ></input-button>   
                                                </center>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div id="education_menu" class="tab-pane fade" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class = "row">
                                    <div class = "col-md-2 col-sm-2 col-xs-2">
                                        <div class="form-group col-xs-12">
                                            <input-button 
                                                label = "เพิ่มข้อมูลการศึกษา"
                                                iconClass = "fa fa-plus-circle"
                                                data-toggle="collapse" 
                                                data-target="#education_form"
                                            ></input-button>
                                        </div>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "col-md-12 col-sm-11 col-xs-11">
                                        <form-dashed
                                            id = "education_form"
                                        
                                        >
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                    <input-select
                                                        label = "ระดับการศึกษา : "
                                                        option_start_name = "เลือกระดับการศึกษา"
                                                        v-model = "education_grade"
                                                        name = "education_grade"
                                                    ></input-select>                                       
                                                </div> 
                                                <div class = "col-md-4">
                                                    <auto-complete
                                                        v-model = "education_faculty"
                                                        label = "เลือกคณะ :auto-complete"
                                                        name = "education_faculty"
                                                        >
                                                    </auto-complete>                                     
                                                </div>     
                                                <div class = "col-md-4">
                                                    <auto-complete
                                                        v-model = "education_division"
                                                        label = "เลือกสาขาวิชา :auto-complete"
                                                        name = "education_division"
                                                        >
                                                    </auto-complete>                                        
                                                </div>     
                                            </div> 
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                        <auto-complete
                                                        label = "วุฒิการศึกษา :auto-complete"
                                                        v-model = "education_qualify"
                                                        name = "education_qualify"
                                                    ></auto-complete>                                        
                                                </div>    
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "education_short_qualify"
                                                        label = "วุฒิการศึกษา (ย่อ) :"
                                                        v-model = "education_short_qualify"
                                                        :readonly="true"
                                                    >
                                                    </input-text>
                                                </div>
                                                <div class = "col-md-4">
                                                        <auto-complete
                                                        label = "สถานศึกษา :auto-complete"
                                                        v-model = "education_place"
                                                        name = "education_place"
                                                    ></auto-complete>                                        
                                                </div>  
                                                <div class = "col-md-4">
                                                    <input-text
                                                        label = "ประเทศ :"
                                                        v-model = "education_country"
                                                        name = "education_country"
                                                    ></input-text>                                        
                                                </div>  
                                                <div class = "col-md-4">
                                                    <input-text
                                                        name = "education_year"
                                                        label = "ปีพ.ศ.ที่จบการศึกษา:"
                                                        v-model = "education_year"
                                                        pattern= "^2([4-9]{1})([0-9]{2})$"
                                                        error-text = "รูปแบบพ.ศ.ไม่ถูกต้อง"
                                                    ></input-text>
                                                </div>
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "education_generation"
                                                        label = "รุ่นที่จบการศึกษา:"
                                                        v-model = "education_generation"
                                                    ></input-text>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-xs-12">
                                                        <center>
                                                            <input-button 
                                                                label = "บันทึก"
                                                                buttonClass = "btn btn-success"
                                                                iconClass = "fa fa-save"
                                                            ></input-button>
                                                            <input-button 
                                                                label = "ยกเลิก"
                                                                buttonClass = "btn btn-danger"
                                                                iconClass = "fa fa-ban"
                                                            ></input-button>   
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form-dashed>
                                    </div>
                                </div>
                                <div class = "col-md-12 col-centered">
                                    <input-table
                                        name = "education_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "educationHeadRows"
                                        :rows = "educationRows"
                                    ></input-table>
                                </div>
                            </div>
                            <div id = "insignia_menu" class = "tab-pane fade" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class = "row">
                                    <div class = "col-md-2 col-sm-2 col-xs-2">
                                        <div class="form-group col-xs-12">
                                            <input-button 
                                                label = "เพิ่มข้อมูลการรับเครื่องราชอิสริยาภรณ์"
                                                iconClass = "fa fa-plus-circle"
                                                data-toggle="collapse" 
                                                data-target="#insignia_form"
                                            ></input-button>
                                        </div>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "col-md-12 col-sm-11 col-xs-11">
                                        <form-dashed
                                            id = "insignia_form"
                                        
                                        >
                                            <div class = "row">
                                                <div class="col-md-4">
                                                    <auto-complete
                                                        name = "insignai_name"
                                                        label = "ชื่อเครื่องราชอิสริยาภรณ์ : auto-complete"
                                                        v-model = "insignai_name"
                                                    ></auto-complete>
                                                </div>
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "insignai_initial_name"
                                                        label = "ชื่อย่อเครื่องราชอิสริยาภรณ์ :"
                                                        v-model = "insignai_initial_name"
                                                        :readonly="true"
                                                    ></input-text>
                                                </div>
                                                <div class="col-md-4">
                                                    <input-select
                                                        name = "insignai_position"
                                                        option_start_name = "เลือกตำแหน่งวิชาการ"
                                                        label = "ตำแหน่งทางวิชาการที่ได้รับ :"
                                                        v-model = "insignai_position"
                                                    ></input-select>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "insignai_grade"
                                                        label = "ขั้น :"
                                                        v-model = "insignai_grade"
                                                    ></input-text>
                                                </div>
                                                <div class="col-md-4">
                                                    <jquery-input-date
                                                        name = "insignai_receive_preview"
                                                        label = "วันที่ได้รับ :"
                                                        v-model = "insignai_receive_preview"
                                                        format="d/m/Y"
                                                        mode = "BE"
                                                        start-range= '2400'
                                                        end-range = '3000'
                                                        en-date="insignai_receive_date"
                                                        @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                    ></jquery-input-date>
                                                </div>
                                                <div class="col-md-4">
                                                    <jquery-input-date
                                                        name = "insignai_return_preview"
                                                        label = "วันที่คืน :"
                                                        v-model = "insignai_return_preview"
                                                        format="d/m/Y"
                                                        mode = "BE"
                                                        start-range= '2400'
                                                        end-range = '3000'
                                                        en-date="insignai_return_date"
                                                        @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                    ></jquery-input-date>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-4">
                                                    <input-text-area
                                                        name = "insignai_remark"
                                                        label = "หมายเหตุ : "
                                                        v-model= "insignai_remark"
                                                    ></input-text-area> 
                                                </div>                            
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-xs-12">
                                                        <center>
                                                            <input-button 
                                                                label = "บันทึก"
                                                                buttonClass = "btn btn-success"
                                                                iconClass = "fa fa-save"
                                                            ></input-button>
                                                            <input-button 
                                                                label = "ยกเลิก"
                                                                buttonClass = "btn btn-danger"
                                                                iconClass = "fa fa-ban"
                                                            ></input-button>   
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form-dashed>
                                    </div>
                                </div>
                                <div class = "col-md-12 col-centered">
                                    <input-table
                                        name = "insignia_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "insigniaHeadRows"
                                        :rows = "insigniaRows"
                                    ></input-table>
                                </div>
                            </div>
                            <div id = "works_menu" class = "tab-pane fade" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class = "row">
                                    <div class = "col-md-2 col-sm-4 col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <input-button 
                                                label = "เพิ่มข้อมูลประวัติการทำงาน"
                                                iconClass = "fa fa-plus-circle"
                                                data-toggle="collapse" 
                                                data-target="#works_form"
                                            ></input-button>
                                        </div>
                                    </div>
                                    <div class = "col-md-4 col-sm-7 col-xs-12">
                                        <input-select
                                                label = "false"
                                                option_start_name = "ค้นหาด้วยประเภทหนังสือคำสั่ง"
                                                v-model = "work_filter"
                                                name = "work_filter"
                                        ></input-select>
                                    </div>
                                </div>         
                                <div class = "row">
                                    <div class="col-md-12 col-sm-11 col-xs-11">
                                        <form-dashed
                                            id = "works_form"
                                        >
                                            <div class="row">
                                                <div class = "col-md-4">
                                                    <input-select
                                                        label = "ประเภทของหนังสือคำสั่ง: "
                                                        option_start_name = "ประเภทของหนังสือคำสั่ง"
                                                        v-model = "official_type"
                                                        name = "official_type"
                                                        :options = "officialTypesApi"
                                                    ></input-select>                                       
                                                </div>   
                                                <div class = "col-md-4">  
                                                    <input-text
                                                        name = "official_no"
                                                        label = "เลขที่หนังสือคำสั่ง :"
                                                        v-model = "official_no"
                                                    ></input-text>                                  
                                                </div>  
                                                <div class = "col-md-4">  
                                                    <input-text
                                                        name = "official_name"
                                                        label = "เรื่องของหนังสือคำสั่ง :"
                                                        v-model = "official_name"
                                                    ></input-text>                                  
                                                </div>         
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-4">  
                                                    <input-select
                                                        name = "employ_unit"
                                                        label = "หน่วยงาน :"
                                                        option_start_name = "เลือกหน่วยงาน"
                                                        v-model = "employ_unit"
                                                        :options="employUnitApi"
                                                    ></input-select>                                  
                                                </div>  
                                                <div class = "col-md-4">
                                                    <jquery-input-date
                                                            name = "sign_date_preview"
                                                            label = "วันที่ลงนาม :"
                                                            v-model = "sign_date_preview"
                                                            format="d/m/Y"
                                                            mode = "BE"
                                                            start-range= '2400'
                                                            end-range = '3000'
                                                            en-date="sign_date"
                                                            @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                    ></jquery-input-date>
                                                </div> 
                                                <div class = "col-md-4">
                                                    <jquery-input-date
                                                            name = "enforce_date_preview"
                                                            label = "วันที่มีผลบังคับใช้ :"
                                                            v-model = "enforce_date_preview"
                                                            format="d/m/Y"
                                                            mode = "BE"
                                                            start-range= '2400'
                                                            end-range = '3000'
                                                            en-date="enforce_date"
                                                            @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                    ></jquery-input-date>
                                                </div> 
                                            </div>
                                            <div class = "row">
                                                <div class = "col-md-4">
                                                    <input-select
                                                        label = "ประเภทการจ้าง :"
                                                        option_start_name = "เลือกประเภทการจ้าง"
                                                        v-model = "employ_type"
                                                        name = "employ_type"
                                                    ></input-select>                                       
                                                </div>    
                                                <div class ="col-md-4">
                                                    <input-select
                                                        label = "ตำแหน่ง :"
                                                        option_start_name = "เลือกตำแหน่ง"
                                                        v-model = "position_id"
                                                        name = "position_id"
                                                        :options = "empPositionsApi"
                                                    ></input-select>
                                                </div> 
                                                <div class="col-md-4">
                                                    <input-text-area
                                                        name = "work_remark"
                                                        label = "หมายเหตุ : "
                                                        v-model= "work_remark"
                                                    ></input-text-area> 
                                                </div>   
                                            </div>
                                            <div id = "main_collapse" class = "work_collapse" style="display:none;"> 
                                                <div class = "row">
                                                    <input-line></input-line>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div id = "second_collapse" class = "work_collapse" style="display:none;">
                                                    <div class ="col-md-4">
                                                        <input-select
                                                            label = "สายงาน :"
                                                            option_start_name = "เลือกสายงาน"
                                                            v-model = "work_field"
                                                            name = "work_field"
                                                            :options="workFieldApi"
                                                        ></input-select>
                                                    </div>
                                                </div>
                                                <div id = "first_collapse" class = "work_collapse" style="display:none;">
                                                    <div class = "col-md-4">
                                                        <jquery-input-date
                                                                name = "employ_start_preview"
                                                                label = "ระยะเวลาจ้างเริ่มต้น :"
                                                                v-model = "employ_start_preview"
                                                                format="d/m/Y"
                                                                mode = "BE"
                                                                start-range= '2400'
                                                                end-range = '3000'
                                                                en-date="employ_date_start"
                                                                @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                        ></jquery-input-date>
                                                    </div>
                                                    <div class = "col-md-4">
                                                        <jquery-input-date
                                                                name = "employ_end_preview"
                                                                label = "ระยะเวลาจ้างสิ้นสุด :"
                                                                v-model = "employ_end_preview"
                                                                format="d/m/Y"
                                                                mode = "BE"
                                                                start-range= '2400'
                                                                end-range = '3000'
                                                                en-date="employ_date_end"
                                                                @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                        ></jquery-input-date>
                                                    </div>
                                                </div>
                                                    <div id = "third_collapse" class = "work_collapse" style="display:none;"> 
                                                        <div class = "col-md-4">  
                                                            <input-text
                                                                name = "goverment_no"
                                                                label = "เลขประจำตำแหน่งพนักงาน/ข้าราชการ :"
                                                                v-model = "goverment_no"
                                                            ></input-text>                                  
                                                        </div>  
                                                        <div class = "col-md-4">  
                                                            <input-text
                                                                name = "positon_frame"
                                                                label = "เลขกรอบของตำแหน่ง :"
                                                                v-model = "positon_frame"
                                                            ></input-text>                                  
                                                    </div>
                                                </div>
                                                <div id = "fourth_collapse" class = "work_collapse" style="display:none;">
                                                    <div class ="col-md-4">
                                                        <input-select
                                                            label = "ระดับที่ได้รับแต่งตั้ง :"
                                                            option_start_name = "เลือกระดับ"
                                                            v-model = "appoint_lavel"
                                                            name = "appoint_lavel"
                                                            :options="appointLavelApi"
                                                        ></input-select>
                                                    </div>
                                                    <div class ="col-md-4">
                                                        <input-select
                                                            label = "สายงานที่ได้รับแต่งตั้ง :"
                                                            option_start_name = "เลือกสายงานที่ได้รับแต่งตั้ง"
                                                            v-model = "appoint_field"
                                                            name = "appoint_field"
                                                            :options = "appointFieldApi"
                                                        ></input-select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-xs-12">
                                                        <center>
                                                            <input-button 
                                                                label = "บันทึก"
                                                                buttonClass = "btn btn-success"
                                                                iconClass = "fa fa-save"
                                                            ></input-button>
                                                            <input-button 
                                                                label = "ยกเลิก"
                                                                buttonClass = "btn btn-danger"
                                                                iconClass = "fa fa-ban"
                                                            ></input-button>   
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>                             
                                        </form-dashed>
                                    </div>
                                </div>
                                <div class="col-md-12 col-centered">
                                    <input-table
                                        name = "work_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "workHeadRows"
                                        :rows = "workRows"
                                    ></input-table>
                                </div>
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
                                            v-model = "unit_id"
                                            name = "unit_id"
                                            :options = "UnitApi"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "หน่วยงานย่อย : "
                                            option_start_name = "เลือกหน่วยงานย่อย"
                                            v-model = "subunit_id"
                                            name = "subunit_id"
                                            :options = "subUnitApi"
                                        ></input-select>
                                    </div>
                                    <div class ="col-md-4">
                                        <input-select
                                            label = "สถานที่ปฏิบัติงาน : "
                                            option_start_name = "เลือกสถานที่ปฏิบัติงาน"
                                            v-model = "work_place_id"
                                            name = "work_place_id"
                                            :options = "workPlaceApi"
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
                                            name = "vpn"
                                            label = "VPN :"
                                            v-model = "vpn"
                                        ></input-text>
                                    </div> 
                                    <div class="col-md-4">
                                        <jquery-input-date
                                            name = "work_time_start"
                                            label = "เวลาเริ่มปฏิบัติงาน :"
                                            v-model = "work_time_start"
                                            format="H:i"
                                            mode = "BE"
                                            :datepicker = "false"
                                            :timepicker="true"
                                        ></jquery-input-date>
                                    </div>
                                    <div class="col-md-4">
                                        <jquery-input-date
                                            name = "work_time_end"
                                            label = "เวลาเลิกปฏิบัติงาน :"
                                            v-model = "work_time_end"
                                            format="H:i"
                                            mode = "BE"
                                            :datepicker = "false"
                                            :timepicker="true"
                                        ></jquery-input-date>
                                    </div>
                                    <!-- <div class ="col-md-2 col-xs-4">
                                        <jquery-input-date
                                            name = "work_start"
                                            label = "เวลาเริ่มปฏิบัติงาน :"
                                            v-model = "work_start"
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
                                                name = "work_time_end"
                                                label = "เวลาเลิกปฏิบัติงาน :"
                                                v-model = "work_time_end"
                                                format="H:i"
                                                mode = "BE"
                                                :datepicker = "false"
                                                :timepicker="true"
                                            ></jquery-input-date>
                                        </div>
                                    </div>   -->
                                    <div class = "row padding">
                                        <div class="col-md-12">
                                            <div class="form-group col-xs-12">
                                                <center>
                                                    <input-button 
                                                        label = "บันทึกข้อมูล"
                                                        buttonClass = "btn btn-success"
                                                        iconClass = "fa fa-save"
                                                    ></input-button>
                                                    <input-button 
                                                        label = "ยกเลิกการบันทึก"
                                                        buttonClass = "btn btn-danger"
                                                        iconClass = "fa fa-ban"
                                                    ></input-button>   
                                                </center>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div id = "taining_menu" class = "tab-pane fade" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class = "row">
                                    <div class = "col-md-2 col-sm-2 col-xs-2">
                                        <div class="form-group col-xs-12">
                                            <input-button 
                                                label = "เพิ่มข้อมูลการลาศึกษา/อบรม"
                                                iconClass = "fa fa-plus-circle"
                                                data-toggle="collapse" 
                                                data-target="#tainning_form"
                                            ></input-button>
                                        </div>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class="col-md-12 col-sm-11 col-xs-11">
                                        <form-dashed
                                            id = "tainning_form"
                                        >
                                            <div class="row">
                                                <div class = "col-md-4">
                                                    <input-select
                                                        label = "ประเภทการลา : "
                                                        option_start_name = "เลือกประเภทการลา"
                                                        v-model = "tainning_type"
                                                        name = "tainning_type"
                                                        :options = "tainningTypeApi"
                                                    ></input-select>                                       
                                                </div>         
                                                <div class = "col-md-4">
                                                    <input-select
                                                        label = "ระดับการศึกษา/ฝึกอบรม : "
                                                        option_start_name = "เลือกระดับการศึกษา/ฝึกอบรม"
                                                        v-model = "tainning_lavel"
                                                        name = "tainning_lavel"
                                                        :options = "tainningLavelApi"
                                                    ></input-select>                                       
                                                </div>         
                                                <div class = "col-md-4">  
                                                    <input-text
                                                        name = "tainning_course"
                                                        label = "หลักสูตร :"
                                                        v-model = "tainning_course"
                                                    ></input-text>                                  
                                                </div>         
                                            </div>
                                            <div class = "row">
                                                    <div class = "col-md-4">
                                                    <input-text
                                                        name = "tainning_division"
                                                        label = "สาขาวิชา : "
                                                        v-model = "tainning_division"
                                                    ></input-text>                                       
                                                </div>       
                                                <div class="col-md-4">
                                                    <jquery-input-date
                                                        name = "tainning_start_preview"
                                                        label = "ลาตั้งแต่วันที่ :"
                                                        v-model = "tainning_start_preview"
                                                        format="d/m/Y"
                                                        mode = "BE"
                                                        start-range= '2400'
                                                        end-range = '3000'
                                                        en-date="tainning_date_start"
                                                        @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                    ></jquery-input-date>
                                                </div>
                                                <div class="col-md-4">
                                                    <jquery-input-date
                                                        name = "tainning_finish_preview"
                                                        label = "ถึงวันที่ :"
                                                        v-model = "tainning_finish_preview"
                                                        format="d/m/Y"
                                                        mode = "BE"
                                                        start-range= '2400'
                                                        end-range = '3000'
                                                        en-date="tainning_date_finish"
                                                        @update="(enDate,dob,ageName) => updateDate(enDate,dob,ageName)"
                                                    ></jquery-input-date>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "tainning_place"
                                                        label = "สถานศึกษา :"
                                                        v-model = "tainning_place"
                                                    ></input-text>   
                                                </div>
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "tainning_country"
                                                        label = "ประเทศ :"
                                                        v-model = "tainning_country"
                                                    ></input-text>   
                                                </div>      
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "tainning_city"
                                                        label = "เมือง :"
                                                        v-model = "tainning_city"
                                                    ></input-text>   
                                                </div>                                  
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-4">
                                                    <input-text
                                                        name = "tainning_bursary"
                                                        label = "ทุนการศึกษา :"
                                                        v-model = "tainning_bursary"
                                                    ></input-text>   
                                                </div> 
                                                <div class="col-md-4">
                                                    <input-text-area
                                                        name = "tainning_remark"
                                                        label = "หมายเหตุ :"
                                                        v-model = "tainning_remark"
                                                    ></input-text-area>   
                                                </div> 
                                            </div>
                                            <div class = "row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-xs-12">
                                                        <center>
                                                            <input-button 
                                                                label = "บันทึก"
                                                                buttonClass = "btn btn-success"
                                                                iconClass = "fa fa-save"
                                                            ></input-button>
                                                            <input-button 
                                                                label = "ยกเลิก"
                                                                buttonClass = "btn btn-danger"
                                                                iconClass = "fa fa-ban"
                                                            ></input-button>   
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form-dashed>
                                    </div>
                                </div>
                                <div class = "col-md-12 col-centered">
                                    <input-table
                                        name = "taining_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "tainingHeadRows"
                                        :rows = "tainingRows"
                                    ></input-table>
                                </div>
                            </div>
                            <div id="honor_menu" class="tab-pane fade" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class = "row">
                                    <div class = "col-md-2 col-sm-2 col-xs-2">
                                        <div class = "form-group col-xs-12">
                                        <input-button 
                                            label = "เพิ่มข้อมูลรางวัลเกียรติยศ"
                                            iconClass = "fa fa-plus-circle"
                                            data-toggle="collapse" 
                                            data-target="#honor_form"
                                        ></input-button>
                                        </div>
                                    </div>
                                </div>
                                <div class = "row">
                                    <div class = "col-md-12 col-sm-11 col-xs-11">
                                        <form-dashed
                                            id = "honor_form"
                                        >
                                                <div class = "row">
                                                    <div class = "col-md-4">
                                                        <input-text
                                                            name = "honor_year"
                                                            label = "ปีพ.ศ.ที่ได้รับรางวัลเกียรติยศ :"
                                                            v-model = "honor_year"
                                                            pattern= "^2([4-9]{1})([0-9]{2})$"
                                                            error-text = "รูปแบบพ.ศ.ไม่ถูกต้อง"
                                                        ></input-text>
                                                    </div>
                                                    <div class = "col-md-4">
                                                        <input-text
                                                            name = "honor_name"
                                                            label = "ชื่อรางวัลเกียรติยศ :"
                                                            v-model = "honor_name"
                                                            pattern= "^2([4-9]{1})([0-9]{2})$"
                                                            error-text = "รูปแบบพ.ศ.ไม่ถูกต้อง"
                                                        ></input-text>
                                                    </div>
                                                    <div class = "col-md-4">
                                                        <input-select
                                                            label = "ระดับของรางวัลเกียรติยศ : "
                                                            option_start_name = "เลือกระดับของรางวัลเกียรติยศ "
                                                            v-model = "honor_lavel"
                                                            name = "honor_lavel"
                                                            :options = "empHonorLavelApi"
                                                        ></input-select>
                                                    </div>     
                                                </div>
                                                <div class = "row">
                                                    <div class = "col-md-4">
                                                        <input-text
                                                            name = "honor_type"
                                                            label = "ด้านของรางวัลเกียรติยศ :"
                                                            v-model = "honor_type"
                                                        ></input-text>
                                                    </div>
                                                    <div class = "col-md-4">
                                                        <input-text
                                                            name = "honor_unit"
                                                            label = "หน่วยงานที่มอบรางวัลเกียรติยศ :"
                                                            v-model = "honor_unit"
                                                        ></input-text>
                                                    </div>
                                                </div>
                                                <div class = "row">
                                                <div class="col-md-12">
                                                    <div class="form-group col-xs-12">
                                                        <center>
                                                            <input-button 
                                                                label = "บันทึก"
                                                                buttonClass = "btn btn-success"
                                                                iconClass = "fa fa-save"
                                                            ></input-button>
                                                            <input-button 
                                                                label = "ยกเลิก"
                                                                buttonClass = "btn btn-danger"
                                                                iconClass = "fa fa-ban"
                                                            ></input-button>   
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form-dashed>
                                    </div>
                                </div>
                                <div class = "col-md-12 col-centered">
                                    <input-table
                                        name = "honor_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "honorHeadRows"
                                        :rows = "honorRows"
                                    ></input-table>
                                </div>
                                <br/>
                            </div>
                            <div id="manager_menu" class="tab-pane fade" style="max-height: 680px; overflow-y: scroll;overflow-x: hidden;">
                                <div class = "col-md-12 col-centered"> 
                                    <input-table
                                        name = "manager_table"
                                        :has-actions = "['edit','delete']"
                                        :head-rows = "managerHeadRows"
                                        :rows = "managerRows"
                                    ></input-table>
                                </div>
                            </div>
                        </div>
                    </panel>
                <div>
            </div>
        <div>
        </div><br><br><br><br><br><br>
    </div>
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
    @media screen and (max-width: 640px) {
    .responsive-card-table thead tr {
        position: absolute;
        top: -9999em;
        left: -9999em;
    }
    .responsive-card-table tr {
        display: block;
    }
    .responsive-card-table td {
        margin-top: 1rem;
        border: none;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
                justify-content: flex-start;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        padding-left: 0%;
        position: relative;
        padding-left:100px;
    }
    .responsive-card-table td:before {
        content: attr(data-label);
        display: inline-block;
        font-weight: bold;
        line-height: 1.5;
        margin-left: -100%;
        width: 100%;
        position: relative;
        z-index: 1;
    }
    .responsive-card-table td:after {
        content: '';
        position: absolute;
        width: 45%;
        height: 95%;
        left: 0px;
        top: 1px;
        z-index: 0;
    }
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
    // import InputRadio from '../inputs/InputRadioComponent.vue'
    import InputSelect from '../inputs/InputSelectComponent.vue'
    import InputCheckbox from '../inputs/InputCheckboxComponent.vue'
    import InputLineLabel from '../inputs/InputLineLabelComponent.vue'
    import AutoComplete from '../inputs/AutoCompleteComponent.vue'
    import NavbarTabs from '../inputs/NavbarTabsComponent.vue'
    import FileInput from '../inputs/FileInputComponent.vue'
    import jqueryInputDate from '../inputs/JqueryInputDate.vue'
    import InputButton from '../inputs/InputButtonComponent.vue'
    import InputSelectA from '../inputs/InputSelect.vue'
    import FormDashed from '../inputs/FormDashed.vue'
    import InputTable from '../inputs/InputTableComponent.vue'
    import InputTextArea from '../inputs/InputTextAreaComponent.vue'
    import InputRadio from '../inputs/InputRadio.vue'
    import InputLine from '../inputs/LineComponent.vue'
    import NavbarComponent from '../inputs/NavbarComponent.vue'
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
            FormDashed,
            InputTextArea,
            InputLine,
            NavbarComponent
        },
        data() {
            return {
                profile_nav : [
                    { value : '#employee_menu' , label : 'ประวัติบุคลากร', icon : 'fa fa-id-card' , class : '' },
                    { value : '#profile_menu' , label : 'ประวัติส่วนตัว', icon : 'fa fa-user-circle-o' , class : 'active' },
                    { value : '#works_menu' , label : 'ประวัติการทำงาน', icon : 'fa fa-id-badge', class : ''},
                    { value : '#education_menu' , label : 'ประวัติการศึกษา', icon : 'fa fa-graduation-cap', class : '' },
                    { value : '#taining_menu' , label : 'ประวัติการลาศึกษา/อบรม', icon : 'fa fa-plane', class : ''},
                    { value : '#insignia_menu' , label : 'ประวัติการรับเครื่องราชฯ', icon : 'fa fa-star', class : ''},
                    { value : '#honor_menu' , label : 'ประวัติเกียรติยศ', icon : 'fa fa-trophy', class : ''},
                    { value : '#manager_menu' , label : 'ตำแหน่งบริหาร', icon : 'fa fa-black-tie', class : ''},
                ],
                careersApi: '',
                workStatusApi : '',

                // ข้อมูลพนักงาน
                ref_id : '',
                document_no : '',
                gender : null,
                prefix_id : null,
                extra_prefix_id : '',
                education_prefix : '',
                profession_prefix : '',
                firstname : '',
                firstname_eng : '',
                lastname : '',
                lastname_eng : '',
                middlename : '',
                middlename_eng : '',
                picture : '',
                work_status : null,
                work_type :  '',
                work_subtype : '',
                unemploy_date : '',
                dob_preview : '',
                dob : '',
                age : '',
                nickname: '',
                race: '',
                empApiRaces : null,
                nation: '',
                religion : '',
                pln : '',
                blood : '',
                id_card : '',
                house : '',
                rename : '',
                foreign : '',
                medicine : '',
                soldier : '',
                marital_status : '',
                empPrefixApi : '',
                empApiRaces : '',
                genders : [
                    { value : '0' , label : 'หญิง' , url : 'prefix-female'},
                    { value : '1' , label : 'ชาย' , url : 'prefix-male'}, 
                ],
                work_statuses : [
                    { value : '0', label : 'ปฏิบัติงาน' , url : 'status-active'},
                    { value : '1', label : 'พ้นสภาพ' ,  url : 'status-inactive'},
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
                
                // ข้อมูลคู่สมรส
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
                spouse_document_file : '',
                spouse_house_file : '',
                spouse_rename : '',
                spouse_marriage_preview : '',
                spouse_marriage_date : '',
                spouse_marriage_no: '',
                spouse_marriage_file : '',
                spouse_gender : '',
                spousePrefixApi : '',

                // ข้อมูลบิดา
                father_prefix_id : '',
                father_first_name : '',
                father_last_name : '',
                father_document_no : '',
                father_career : null,
                father_status : '',
                father_marital_status :  '',
                father_document_file : '',
                father_passport_no : '',
                father_house_file : '',
                father_rename_file : '',
                father_marriage_file : '',
                father_chile_file : '',
                fatherPrefixApi : '',
                father_marriage_preview : '',
                father_marriage_date : '',

                // ข้อมูลมารดา
                mother_prefix_id : '',
                mother_first_name : '',
                mother_last_name : '',
                mother_document_no : '',
                mother_passport_no : '',
                mother_career : '',
                mother_status : '',
                mother_id_card : '',
                mother_house : '',
                mother_rename : '',
                mother_marriage : '',
                mother_marital_status :  '',
                motherPrefixApi : '',

                //ข้อมูลบุตร/ธิดา
                child_prefix_id: '',
                child_first_name : '',
                child_last_name: '',
                child_document_no: '',
                child_passport_no : '',
                child_dob_preview : '',
                child_dob:'',
                child_gender : '',
                child_cher_file : '',
                childPrefixApi : '',
                childsHeadRows : ['คนที่','ชื่อ-นามสกุล','เลขบัตรประชาชน','เลขหนังสือเดินทาง','วัน/เดือน/ปีเกิด','อายุ','เพศ'],
                childRows :  [
                    {
                        "id" : 22,
                        "no" : 1,
                        "full_name" : "Jill Smith",
                        "document_no" : 1234567890,
                        "passport_no" : 1234567890,
                        "dob" : '10/10/2010',
                        "age" : 8,
                        "gender" : "หญิง",
                    },
                    {
                        "id" : 33, 
                        "no" : 2,
                        "full_name" : "Jame Smith",
                        "document_no" : 1234567891,
                        "passport_no" : 1234567892,
                        "dob" : '10/10/2012',
                        "age" : 6,
                        "gender" : "ชาย",

                    },
                ],

                //ที่อยู่ตามทะเบียนบ้าน
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

                // ที่อยู่ที่สามารถติดต่อได้
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

                // ช่องทางการติดต่อ
                telephone : '',
                phone : '',
                mahidol_email : '',
                first_email : '',
                second_email : '',

                //ผู้ติดต่อกรณีฉุกเฉิน
                emergency_prefix_id : '',
                emergency_firstname : '',
                emergency_lastname : '',
                emergency_gender: '',
                emergency_relation : '',
                emergency_telephone : '',
                emergency_phone : '',
                emergencyPrefixApi : '',

               // การลาอบรบ
                tainning_type : '',
                tainning_lavel : '',
                tainning_course : '',
                tainning_division : '',
                tainning_start_preview : '',
                tainning_date_start : '',
                tainning_finish_preview : '',
                tainning_date_finish : '',
                tainning_place : '',
                tainning_country : '',
                tainning_city : '',
                tainning_bursary : '',
                tainning_remark : '',
                tainningTypeApi : [ 
                    { value : '1', label : 'ลาประชุม สัมนา อบรม' }, 
                    { value : '2', label : 'ลาศึกษาต่อ ลาฝึกอบรม' }, 
                    { value : '3', label : 'ขยายเวลา ลาศึกษาต่อ ฝึกอบรม' }, 
                    { value : '4', label : 'รายงานตัวกลับจากลาศึกษา ฝึกอบรม' }, 
                ],
                tainningLavelApi : [
                    { value : '1', label : 'ลาศึกษาต่อ ณ ต่างประเทศ' }, 
                    { value : '2', label : 'ลาศึกษาในประเทศ' }, 
                    { value : '3', label : 'ลาฝึกอบรม ณ ต่างประเทศ' }, 
                    { value : '4', label : 'ลาฝึกอบรมในต่างประเทศ' }, 
                ],
                tainingHeadRows : ['ประเภทการลา','ระดับ','หลักสูตร/เรื่อง','สาขาวิชา','ระยะเวลา','สถานศึกษา','ประเทศ','เมือง','ทุน','หมายเหตุ'],
                tainingRows : [],

                // การรับเครื่องราชฯ
                insignai_name : '',
                insignai_initial_name : '',
                insignai_position : '',
                insignai_lavel : '',
                insignai_grade : '',
                insignai_receive_preview : '',
                insignai_receive_date : '',
                insignai_return_preview : '',
                insignai_return_date : '',
                insignai_remark: '',
                insigniaHeadRows : ['ชื่อเครื่องราชอิสริยาภรณ์','ชื่อ (ย่อ)','ตำแหน่งที่ได้รับ','ขั้น','วันที่ได้รับ','วันที่คืน','หมายเหตุ'],
                insigniaRows : [],

               // รางวัลเกียรติยศ
                honor_year : '',
                honor_name : '',
                honor_lavel : '',
                honor_type : '',
                honor_unit : '',
                empHonorLavelApi : [
                    { value : '0', label : 'ระดับชาติ' },
                    { value : '0', label : 'ระดับนานาชาติ'}
                ],
                honorHeadRows : ['ปีที่ได้รับรางวัล', 'ชื่อรางวัล','ระดับของรางวัล','ด้านของรางวัล','หน่วยงานที่มอบรางวัล'],
                honorRows : [],

                // ประวัติการทำงาน
                official_no : '',
                official_type : '',
                official_name : '',
                officialTypesApi : [
                    { value : '1', label : 'บรรจุและแต่งตั้ง' }, 
                    { value : '2', label : 'บรรจุและแต่งตั้ง (อาจารย์)' }, 
                    { value : '3', label : 'อนุมัติลูกจ้างชั่วคราว' }, 
                    { value : '4', label : 'จ้างต่อ' }, 
                    { value : '5', label : 'ต่อเวลาปฏิบัติงาน' }, 
                    { value : '6', label : 'ต่อสัญญาจ้างเป็นที่ปรึกษาคณะฯ' }, 
                    { value : '7', label : 'อนุมัติให้ยืมตัว' }, 
                    { value : '8', label : 'โอนย้าย' }, 
                    { value : '9', label : 'เปลี่ยนตำแหน่ง' }, 
                    { value : '10', label : 'แก้ไขคำสั่งให้ข้าราชการลาออกจากราชการ' }, 
                    { value : '11', label : 'แก้ไขคำสั่งบรรจุและแต่งตั้งผู้เปลี่ยนสถานภาพ' }, 
                    { value : '12', label : 'ปรับระดับชั้นงาน' }, 
                    { value : '13', label : 'เปลี่ยนประเภทการจ้าง' }, 
                    { value : '14', label : 'ให้ใช้ชื่อตำแหน่งพนักงานมหาวิทยาลัยประเภทสนับสนุนความก้าวหน้าของตำแหน่ง' }, 
                    { value : '15', label : 'แต่งตั้งพนักงานมหาวิทยาลัยให้ดำรงตำแหน่งทางวิชาการ' }, 
                    { value : '16', label : 'แต่งตั้งผู้บริหาร' }, 
                    { value : '17', label : 'ลาออก' },
                    { value : '18', label : 'ขยายระยะเวลาการจ้างพนักงานมหาวิทยาลัย' },  
                    { value : '19', label : 'ให้พนักงานมหาวิทยาลัยกลับเข้าปฏิบัติงานตามปกติ' }, 
                    { value : '20', label : 'ลาฝึกอบรม เรียนต่อ' }, 
                ],
                employ_unit : '',
                sign_date_preview : '',
                sign_date : '',
                enforce_date_preview : '',
                enforce_date : '',
                employ_type : '',
                position_id : '',
                empPositionsApi : '',
                work_remark : '',
                goverment_no : '',
                positon_frame : '',
                work_field : '',
                employ_start_preview : '',
                employ_date_start : '',
                employ_end_preview : '',
                employ_date_end : '',
                appoint_lavel : '',
                appoint_field : '',
                employUnitApi : [
                    { 'value' : 1 , 'label' : 'มหาวิทยาลัยมหิดล' },
                    { 'value' : 2 , 'label' : 'คณะแพทยศาสตร์ ศิริราชพยาบาล'}
                ],
                appointLavelApi : [
                    { 'value' : 1 , 'label' : 'คณะฯ' },
                    { 'value' : 2 , 'label' : 'ภาควิชาฯ' },
                    { 'value' : 3 , 'label' : 'สาขาวิชา'} 
                ],
                appointFieldApi : [
                    { 'value' : 1 , 'label' : 'บริหาร' },
                    { 'value' : 2 , 'label' : 'วิชาชีพ' },
                    { 'value' : 2 , 'label' : 'วิชาการ' } 
                ],
                workFieldApi : [
                    { 'value' : 1 , 'label' : 'ชำนาญการ' },
                    { 'value' : 2 , 'label' : 'ชำนาญการพิเศษ'}
                ], 
                workHeadRows : ['ข้อมูลของคำสั่ง','หน่วยงาน','วันที่','ประเภทการจ้าง','ตำแหน่ง','ระยะเวลาจ้าง','หมายเหตุ'],
                workRows : [
                    {
                        'id' : 1,
                        'document' : 'เลขที่/เรื่อง/ประเภทคำสั่ง',
                        'employ_unit' : '',
                        'date' : 'วันที่ลงนาม/วันที่มีผลบังคับใช้',
                        'employ_type' : '',
                        'position_id' : '',
                        'employ_range_date' : 'วันที่เริ่มต้น - วันที่สิ้นสุด',
                        'remark' : '',
                    },
                ],
                work_filter : '',

                // สถานที่ปฏิบัติงาน
                UnitApi : '',
                unit_id : '',
                subUnitApi : '',
                subunit_id : '',
                workPlaceApi : '',
                work_place_id : '',
                work_place_phoneout : '',
                work_place_phonein : '',
                work_place_fax : '',
                vpn : '',
                work_time_start : '',
                work_time_end : '',

                // ประวัติการศึกษา
                education_grade : '',
                education_faculty: '',
                education_division : '',
                education_qualify : '',
                education_short_qualify : '',
                education_place : '',
                education_country : '',
                education_year : '',
                education_generation : '',          
                educationHeadRows : ['ระดับการศึกษา','คณะ','สาขาวิชา','วุฒิการศึกษา','วุฒิการศึกษา (ย่อ)','สถานศึกษา','ประเทศ','ปีการศึกษา','รุ่นที่'],
                educationRows : [],
                
                //ตำแหน่งบริหาร
                                
                managerHeadRows : ['ชื่อคณะกรรมการ', 'ตำแหน่ง', 'ระยะเวลาดำรงตำแหน่ง'],
                managerRows :[],

               
               
                

                
            }
        },
        watch:{
            prefix_id(prefix_id){
                if (prefix_id !== ''){
                    let title = this.prefixApi.find((item) => {
                        return item.value == prefix_id
                    })
                    this.prefix_eng = (title.name_eng);
                }
            },
            gender(gender){
                this.empPrefixApi = '';
                this.prefix_id = '';
                this.prefix_eng = '';
            },
            child_gender(child_gender){
                this.childPrefixApi = '';
                this.child_prefix_id = '';
            },
            spouse_gender(spouse_gender){
                this.spousePrefixApi = '';
                this.spouse_prefix_id = '';
            },
            marital_status(marital_status){
                console.log(marital_status);
                if (marital_status == 1){
                    $('#marital_form').slideDown('slow'); 
                }else{
                    $('#marital_form').slideUp('slow'); 
                }
            },
            emergency_gender(emergency_gender){
                this.emergencyPrefixApi = '';
                this.emergency_prefix_id = '';
            },
            work_status(work_status){
                this.work_type = '';
                this.workStatusApi = '';
                $('#unemploy_date').hide(); 
            },
            official_type(official_type){
                if (official_type == 1 ||official_type == 2){
                    $('.work_collapse').hide();
                    $('#main_collapse').show();
                    $('#third_collapse').show();
                    $('#first_collapse').show();
                }
                if (official_type == 3 || official_type == 5){
                    $('.work_collapse').hide();
                    $('#main_collapse').show();
                    $('#first_collapse').show();
                }
                if (official_type == 4 || official_type == 18 || official_type == 20){
                    $('.work_collapse').hide();
                    $('#main_collapse').show();
                    $('#second_collapse').show();
                    $('#first_collapse').show();
                }
                if (official_type == 6 || official_type == 7 || official_type == 8 || official_type == 9 || official_type == 10 || official_type == 11 || official_type == 13 || official_type == 14 || official_type == 17 || official_type == 19){
                    $('.work_collapse').hide();
                    $('#main_collapse').show();
                    $('#second_collapse').show();
                }
                if (official_type == 12 || official_type == 15){
                    $('.work_collapse').hide();
                }
                if (official_type == 16){
                    $('.work_collapse').hide();
                    $('#main_collapse').show();
                    $('#first_collapse').show();
                    $('#fourth_collapse').show();
                }
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
               this.ref_id = value
               axios.post('/get-user',{
                   id : this.ref_id
               })
               .then((response) => {
                    console.log(response);
                    this.document_no = response.data.document_id;
                    let name = response.data.name.split(' ');
                    if (name.length == 3 ){
                        this.firstname = name[0];
                        this.middlename = name[1];
                        this.middlename = name[2];
                    }else{
                        this.firstname = name[0];
                        this.lastname = name[1];
                    }

                    let name_en = response.data.name_en.split(' ');
                    if (name_en.length == 3 ){
                        this.firstname_eng = name_en[0];
                        this.middlename_eng = name_en[1];
                        this.middlename_eng = name_en[2];
                    }else{
                        this.firstname_eng = name_en[0];
                        this.lastname_eng = name_en[1];
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
            updateGender(item,radioName,apiName,value){
                if (this[radioName] != ''){ 
                    this[apiName] = item;
                }
            },
            updateDate(enDate,dob,ageName){
                var current_year = moment().format('YYYY');
                var age = dob.split('/');
                this[enDate] = dob;
                this[ageName] = current_year - age[2] + ' ปี';
            },
            updateStatus(item,radioName,apiName,value) {
                if (this[radioName] != ''){ 
                    if ( value == 1 ){
                        $('#unemploy_date').fadeIn(); 
                    }else{
                        $('#unemploy_date').hide(); 
                    }
                        this[apiName] = item;
                }
             
            }
        }
    }
</script>
