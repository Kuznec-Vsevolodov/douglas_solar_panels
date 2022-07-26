@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12"> 
            <view-user-model-component></view-user-model-component>
            <view-admin-model-component></view-admin-model-component>
            <view-user-list-component></view-user-list-component>
            <user-edit-component></user-edit-component>
            <model-edit-component></model-edit-component>
        </div>
    </div>
</div>
@endsection
