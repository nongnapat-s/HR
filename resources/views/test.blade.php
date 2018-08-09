@extends('layouts.vue')

@section('title','test')


@section('body')
    <panel-component title = "Add new employee">
        <input-text label="first name" v-model ="first_name"></input-text>
        <input-text label="first name" v-model ="first_name"></input-text>
    </panel-component>
    
@endsection

@section('js')
    <script src ="{{ url('/js/create-employee.js') }}"></script>
@endsection
<!-- @section('app-js','/js/app.js') -->