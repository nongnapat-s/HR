@extends('layouts.vue')

@section('title','test')

@section('body')
    <panel-component title = "เพิ่มข้อมูลบุคลากร">
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
            true-label = 'ชาย'  
            false-label = 'หญิง' 
        ></input-radio>
        
        <!-- การบ้านให้ทำเป็น v-model -->
        <input-button 
            label = "เพิ่มข้อมูล"
        ></input-button>

    </panel-component>
    
@endsection

@section('js')
    <script src ="{{ url('/js/create-employee.js') }}"></script>
@endsection
<!-- @section('app-js','/js/app.js') -->