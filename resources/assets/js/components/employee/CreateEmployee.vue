<template>
    <div class = "container-fuild col-md-12">
        <br>
            <form action="/test-form" method="POST" enctype="multipart/form-data">
            <panel
                title = "ประวัติบุคลากร">
                <div class="row">
                   <div class="col-md-5 col-md-push-0 col-sm-5 col-sm-push-0 col-xs-6 col-xs-push-3 padding">
                        <div class="pull-right"><img 
                            :src="'/storage/01.jpeg'" 
                            class="img-thumbnail" 
                            alt="รูปพนักงาน" 
                            height="200" 
                            width="200"/>
                        </div>
                    </div>
                     <div class="col-md-5 col-md-push-0 col-sm-6 col-sm-push-0 col-xs-12 padding">
                        <div class="paddings">
                            <input-text
                                label = "รหัสพนักงาน :"
                                :disabled = "true"
                                name = "ref_id_preview"
                            ></input-text>
                            <input-text
                                label = "ชื่อ - นามสกุล :"
                                :disabled = "true"
                                name = "fullname_preview"
                            ></input-text>
                            <input-text
                                label = "ชื่อ - นามสกุล (อังกฤษ) :"
                                :disabled = "true"
                                name = "fullname_en_preview"
                            ></input-text>
                        </div>
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
                    <div id="profile_menu" class="tab-pane fade in active">
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
                                        name = "gender"
                                        label = "เพศ :"
                                        v-model = "gender"
                                        :options = "genders"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class = "row">
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
                            <div class ="col-md-4">
                                <input-text
                                    name = "position_id"
                                    label = "ตำแหน่งทางวิชาการ :"
                                    v-model = "position_id"
                                    :required="false"
                                    :readonly="true"
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
                        <div class = "row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "title_eng_id"
                                    label = "Title name :"
                                    v-model = "title_eng_id"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "extra_title_eng_id"
                                    label = "Rank / Position :"
                                    v-model = "extra_title_id"
                                ></input-text>
                            </div>
                            <div class ="col-md-4">
                                <input-text
                                    name = "position_eng_id"
                                    label = "Academic position :"
                                    v-model = "position_eng_id"
                                    :required="false"
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
                                    @input="test"
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
                                 <input-select
                                    label = "สัญชาติ : "
                                    option_start_name = "เลือกสัญชาติ"
                                    v-model = "nation"
                                    name = "nation"
                                    :options = "apiRaces"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <input-select
                                    label = "ศาสนา : "
                                    option_start_name = "เลือกศาสนา"
                                    v-model = "religion"
                                    name = "religion"
                                    :options = "apiRaces"
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
                                        name = "blood_group"
                                        label = "หมู่เลือด :"
                                        v-model = "blood_group"
                                        :options = "blood_groups"
                                    />
                                </div>
                            </div>
                            <div class = "col-md-4">
                                <file-input
                                    name = "employee_file"
                                    label = "รูปถ่ายพนักงาน :"
                                    v-model= "employee_file"
                                >
                                </file-input>
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
                                    name = "id_card_file"
                                    label = "สำเนาบัตรประชาชน :"
                                    v-model= "id_card_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "house_file"
                                    label = "สำเนาทะเบียนบ้าน :"
                                    v-model= "house_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "rename_file"
                                    label = "สำเนาใบเปลี่ยนชื่อ :"
                                    v-model= "rename_file"
                                >
                                </file-input>
                            </div>
                        </div>
                        <div class = "row">
                            <div class ="col-md-4">
                                <file-input
                                    name = "medicine_file"
                                    label = "สำเนาใบอนุญาตประกอบโรคศิลป์ :"
                                    v-model= "medicine_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "soldier_file"
                                    label = "สำเนาเอกสารทางทหาร :"
                                    v-model= "soldier_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "alien_file"
                                    label = "สำเนาเอกสารใบต่างด้าว :"
                                    v-model= "alien_file"
                                >
                                </file-input>
                            </div>
                        </div>
                    </div>
                    <div id="marital_menu" class="tab-pane fade">
                        <div class="row">
                            <div class = "col-md-6">
                                <div class = "padding">
                                    <input-radio
                                        name = "marital_status"
                                        label = "สถานภาพของพนักงาน : "
                                        v-model = "marital_status"
                                        :options = "marital_statuses"
                                    />
                                </div>
                            </div>
                        </div>
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
                                    name = "spouse_title_id"
                                    label = "คำนำหน้าชื่อ :"
                                    v-model = "spouse_title_id"
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
                            <div class = "col-md-4">
                                <input-select
                                    label = "อาชีพ : "
                                    option_start_name = "เลือกอาชีพ"
                                    v-model = "spouse_job"
                                    :options = "jobs"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "spouse_id_card_file"
                                    label = "สำเนาบัตรประชาชน :"
                                    v-model= "spouse_id_card_file"
                                >
                                </file-input>
                            </div>
                        </div>
                        <div class="row">
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
                                    name = "spouse_rename_file"
                                    label = "สำเนาใบเปลี่ยนชื่อ :"
                                    v-model= "spouse_rename_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "marriage_file"
                                    label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                    v-model= "marriage_file"
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
                            <div class = "col-md-4">
                                <div class = "padding-row">
                                    <input-radio
                                        name = "spouse_marital_status"
                                        label = "สถานภาพ :"
                                        v-model = "spouse_marital_status"
                                        :options = "marital_statuses"
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
                         <div class="row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "child_title_id"
                                    label = "คำนำหน้าชื่อ :"
                                    v-model = "child_title_id"
                                ></input-text>
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
                                <input-date
                                    name = "child_dob"
                                    label = "วัน/เดือน/ปีเกิด :"
                                    v-model = "child_dob"
                                    format="DD/MM/YYYY"
                                    @input="test"
                                ></input-date>
                            </div>
                            <div class = "col-md-4">
                                <div class = "paddings">
                                    <input-radio
                                        name = "child_marital_status"
                                        label = "สถานภาพ :"
                                        v-model = "child_marital_status"
                                        :options = "marital_statuses"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <center>
                                    <button type="button" class="btn btn-primary" @click="addChild()"><i class="fa fa-plus-circle"></i> เพิ่มข้อมูลบุตร/ธิดา</button>
                                </center>
                            </div>
                        </div>
                        <div class = "col-md-12 col-centered">
                            <table class="table table-bordered" id = "childs">
                                <thead>
                                    <tr>
                                        <th ><center>คนที่</center></th>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>เลขบัตรประชาชน</th>
                                        <th>วัน/เดือน/ปีเกิด</th>
                                        <th>อายุ</th>
                                        <th>สถานภาพ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><center>1</center></td>
                                        <td>John Doe</td>
                                        <td>1234567890123</td>
                                        <td>10/11/1990</td>
                                        <td>28 ปี </td>
                                        <td>สมรส </td>
                                    </tr>
                                    <tr>                                        
                                        <td><center>2</center></td>
                                        <td>July Doe</td>
                                        <td>1234567890124</td>
                                        <td>10/11/1994</td>
                                        <td>24 ปี </td>
                                        <td>โสด </td>
                                    </tr>
                                </tbody>
                            </table>
                         </div>
                    </div>
                    <div id="parents_menu" class="tab-pane fade">
                        <div class="row">
                            <div class ="col-md-12">
                                <input-line-label
                                    label = "บิดา"
                                ></input-line-label>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "father_title_id"
                                    label = "คำนำหน้าชื่อ :"
                                    v-model = "father_title_id"
                                ></input-text>
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
                            <div class = "col-md-4">
                                <input-select
                                    label = "อาชีพ : "
                                    option_start_name = "เลือกอาชีพ"
                                    v-model = "father_job"
                                    :options = "jobs"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "father_id_card_file"
                                    label = "สำเนาบัตรประชาชน :"
                                    v-model= "father_id_card_file"
                                >
                                </file-input>
                            </div>
                        </div>
                         <div class="row">
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
                            <div class ="col-md-4">
                                <file-input
                                    name = "father_marriage_file"
                                    label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                    v-model= "father_marriage_file"
                                >
                                </file-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class ="col-md-4">
                                <file-input
                                    name = "child_file"
                                    label = "สำเนาใบรับรองบุตร :"
                                    v-model= "child_file"
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
                            <div class = "col-md-4">
                                <div class = "paddings">
                                    <input-radio
                                        name = "father_marital_status"
                                        label = "สถานภาพ :"
                                        v-model = "father_marital_status"
                                        :options = "marital_statuses"
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
                                <input-text
                                    name = "mother_title_id"
                                    label = "คำนำหน้าชื่อ :"
                                    v-model = "mother_title_id"
                                ></input-text>
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
                            <div class = "col-md-4">
                                <input-select
                                    label = "อาชีพ : "
                                    option_start_name = "เลือกอาชีพ"
                                    v-model = "mother_job"
                                    :options = "jobs"
                                ></input-select>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "mother_id_card_file"
                                    label = "สำเนาบัตรประชาชน :"
                                    v-model= "mother_id_card_file"
                                >
                                </file-input>
                            </div>
                        </div>
                         <div class="row">
                            <div class ="col-md-4">
                                <file-input
                                    name = "mother_house_file"
                                    label = "สำเนาทะเบียนบ้าน :"
                                    v-model= "mother_house_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "mother_rename_file"
                                    label = "สำเนาใบเปลี่ยนชื่อ :"
                                    v-model= "mother_rename_file"
                                >
                                </file-input>
                            </div>
                            <div class ="col-md-4">
                                <file-input
                                    name = "mother_marriage_file"
                                    label = "สำเนาทะเบียนสมรส/หย่าร้าง :"
                                    v-model= "mother_marriage_file"
                                >
                                </file-input>
                            </div>
                        </div>
                        <div class="row">
                              <div class = "col-md-4">
                                <div class = "padding-row">
                                    <input-radio
                                        name = "mother_status"
                                        label = "สถานะ :"
                                        v-model = "mother_status"
                                        :options = "statuses"
                                    />
                                </div>
                            </div>
                            <div class = "col-md-4">
                                <div class = "padding-row">
                                    <input-radio
                                        name = "mother_marital_status"
                                        label = "สถานภาพ :"
                                        v-model = "mother_marital_status"
                                        :options = "marital_statuses"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contact_menu" class="tab-pane fade">
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
                                    name = "office_telephone"
                                    label = "โทรศัพท์ที่ทำงาน :"
                                    v-model = "office_telephone"
                                ></input-text>
                            </div>
                        </div>
                         <div class="row">
                            <div class ="col-md-4">
                                <input-text
                                    name = "mahidol_email"
                                    label = "Email มหิดล :"
                                    v-model = "mahidol_email"
                                ></input-text>
                            </div>
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
                    </div>
                </div>
            </panel>
            
            <!-- <button type = "submit">submit</button> -->
        <div>
    </div>
        </form>

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
    import InputToggle from '../inputs/InputToggleComponent.vue'
    import InputRadio from '../inputs/InputRadioComponent.vue'
    import InputSelect from '../inputs/InputSelectComponent.vue'
    import InputCheckbox from '../inputs/InputCheckboxComponent.vue'
    import InputLineLabel from '../inputs/InputLineLabelComponent.vue'
    import AutoComplete from '../inputs/AutoCompleteComponent.vue'
    import NavbarTabs from '../inputs/NavbarTabsComponent.vue'
    import FileInput from '../inputs/FileInputComponent.vue'
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
            NavbarTabs,
            FileInput
        },
        data() {
            return {
                ref_id : '',
                document_no : '',
                pln : '',
                title_id : '',
                title_eng_id: '',
                extra_title_id : '',
                extra_title_eng_id : '',
                position_id : '',
                position_eng_id : '',
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
                marital_status : '',
                marital_statuses : [
                    { value : '0' , label : 'โสด' },
                    { value : '1' , label : 'สมรส' },
                    { value : '2' , label : 'หย่าร้าง' },
                    { value : '3' , label : 'หม้าย' },
                ],
                spouse_title_id : '',
                spouse_first_name : '',
                spouse_last_name : '',
                spouse_document_no : '',
                spouse_status : '',
                statuses : [
                    { value : '0' , label : 'ยังมีชีวิตอยู่' },
                    { value : '1' , label : 'ถึงแก่กรรม' },
                ],
                spouse_job: '',
                spouse_marital_status: '',
                father_title_id : '',
                father_first_name : '',
                father_last_name : '',
                father_document_no : '',
                father_job : '',
                father_status : '',
                father_marital_status :  '',
                jobs : [
                    { value : '0' , label : 'รับราชการ' },
                    { value : '1' , label : 'ข้าราชการบำนาญ' },
                    { value : '2' , label : 'พนักงานของรัฐ' },
                    { value : '3' , label : 'รัฐวิสาหกิจ' },
                    { value : '4' , label : 'พนักงานเอกชน' },
                    { value : '5' , label : 'ธุรกิจส่วนตัว' },
                    { value : '6' , label : 'ค้าขาย' },
                    { value : '7' , label : 'รับจ้าง' },
                    { value : '8' , label : 'ว่างงาน' },
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
                autoComplete: null,
                profile_nav : [
                    { value : '#profile_menu' , label : 'ประวัติส่วนตัว', icon : 'fa fa-user-circle-o' , class : 'active' },
                    { value : '#career_menu' , label : 'ประวัติการทำงาน', icon : 'fa fa-address-card', class : ''},
                    { value : '#education_menu' , label : 'ประวัติการศึกษา', icon : 'fa fa-graduation-cap', class : '' },
                    { value : '#taining_menu' , label : 'ประวัติการลาศึกษา/อบรม', icon : 'fa fa-plane', class : ''},
                    { value : '#taining_menu' , label : 'ประวัติการรับราชการ', icon : 'fa fa-briefcase', class : ''},
                    { value : '#insignia_menu' , label : 'ประวัติการรับเครื่องราชฯ', icon : 'fa fa-star', class : ''},
                    { value : '#honor_menu' , label : 'ประวัติเกียรติยศ', icon : 'fa fa-trophy', class : ''},
                    { value : '#manager_menu' , label : 'ตำแหน่งบริหาร', icon : 'fa fa-handshake-o', class : ''},
                ],
                id_card_file : '',
                house_file : '',
                rename_file : '',
                medicine_file : '',
                soldier_file : '',
                alien_file : '',
                spouse_id_card_file : '',
                spouse_house_file : '',
                spouse_rename_file : '',
                marriage_file : '',
                father_id_card_file : '',
                father_house_file : '',
                father_rename_file : '',
                father_marriage_file : '',
                child_file : '',
                mother_title_id : '',
                mother_first_name : '',
                mother_last_name : '',
                mother_document_no : '',
                mother_job : '',
                mother_status : '',
                mother_id_card_file : '',
                mother_house_file : '',
                mother_rename_file : '',
                mother_marriage_file : '',
                mother_marital_status :  '',
                employee_file : '',
                phone : '',
                office_telephone : '',
                mahidol_email : '',
                first_email : '',
                second_email : '',
                child_title_id: '',
                child_first_name : '',
                child_last_name: '',
                child_document_no: '',
                child_dob:'',
                child_marital_status: ''
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
            test : function(){
                console.log(this.dob);
            },
            addChild: function(){
                var table = document.getElementById("childs");
                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                cell1.innerHTML = "<center>3</center>";
                cell2.innerHTML = "ทดสอบ เป็นลูก";
                cell3.innerHTML = "12345678955";
                cell4.innerHTML = "12/12/1912";
                cell5.innerHTML = "100 ปี";
                cell6.innerHTML = "โสด";
            },
        }
    }
</script>
