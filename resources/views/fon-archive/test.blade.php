<style>
    img {
        width: 15%;
        height: auto;
    }
</style>
@extends('layouts.vue')

@section('title','test')

@section('body')
    <panel-component title = "ประวัติส่วนตัว">
        <center>
            <p>
                <div class = "row">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive" alt="Cinque Terre">
                </div>
            </p>
        </center>
    </panel-component>
@endsection

@section('js')
    <script src = "{{ mix('/js/manifest.js') }}"></script>
    <script src = "{{ mix('/js/vendor.js') }}"></script>
    <script src ="{{ mix('/js/create-employee.js') }}"></script>
@endsection
<!-- @section('app-js','/js/app.js') -->