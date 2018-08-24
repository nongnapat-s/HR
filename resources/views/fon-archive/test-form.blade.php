@extends('layouts.vue')

@section('title','test')

@section('body')
    <panel-component title = "ประวัติส่วนตัว">
        <div class = "row">
            <input-text 
                label="SAP ID : " 
                v-model ="ref_id">
            </input-text>

            <input-text 
                label="คำนำหน้าชื่อ : " 
                v-model ="title_name"
            ></input-text>

            <input-text 
                label="ชือ-นามสกุลไทย : " 
                v-model ="thai_name"
            ></input-text>

            <input-text 
                label="ชือ-นามสกุลอังกฤษ : " 
                v-model ="english_name"
            ></input-text>

            <input-text 
                label="ชื่อเล่น : " 
                v-model ="nickname"
            ></input-text>

            <pikaday 
                label = "วัน/เดือน/ปีเกิด : " 
                v-model = "date_of_birth" 
                format = "DD/MM/YYYY"
            ></pikaday>

            <input-text 
                label="อายุ : " 
                v-model ="age"
            ></input-text>
            <!-- <input-radio
                id = "toggle-gender"
                :labels = "['ชาย','หญิง']"
                :state = "true"
            ></input-radio> -->
            <!-- <input-radio
                id = "toggle-feel"
                :labels = "['เผลอ','ไม่เผลอ']"
                :state = "false"
            ></input-radio> -->
            <input-radio
                id = "toggle-gender"
                v-model = "gender"
                true-label = 'ชาย'  
                false-label = 'หญิง' 
                default-label = "เพศ"
            ></input-radio>

            <input-text 
                label="เชื้อชาติ : " 
                v-model ="race"
            ></input-text>

            <input-text 
                label="สัญชาติ : " 
                v-model ="nationality"
            ></input-text>

        <!-- การบ้านให้ทำเป็น v-model -->
            <input-button 
                v-on:click.native="submit_form"
                label = "เพิ่มข้อมูล"
            ></input-button>
        </div>

    </panel-component>
    
@endsection

@section('js')
    <script src = "{{ mix('/js/manifest.js') }}"></script>
    <script src = "{{ mix('/js/vendor.js') }}"></script>
    <script src ="{{ mix('/js/create-employee.js') }}"></script>
@endsection
<!-- @section('app-js','/js/app.js') -->