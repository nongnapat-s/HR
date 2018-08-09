@extends('layouts.vue')

@section('title','test')

@section('body')
    <panel-component title = "Add new employee">
        <input-text label="SAP ID : " v-model ="ref_id"></input-text>
        <input-text label="คำนำหน้าชื่อ : " v-model ="english_name"></input-text>
        <input-text label="ชือ-นามสกุลไทย : " v-model ="thai_name"></input-text>
        <input-text label="ชือ-นามสกุลอังกฤษ : " v-model ="english_name"></input-text>
    </panel-component>
    
@endsection

@section('js')
    <script src ="{{ url('/js/create-employee.js') }}"></script>
@endsection
<!-- @section('app-js','/js/app.js') -->