@extends('layouts.vue-app')

@section('title', $title)

@section('body')
    <app ref="root"></app>
@endsection

@section('app-js')
    <script src="{{ mix('/js/' . $jsFile) }}"></script>
@endsection

@if (isset($data))
    @section('store-json')
        <script>const store = {!! json_encode($data) !!} </script>
    @endsection
@endif
