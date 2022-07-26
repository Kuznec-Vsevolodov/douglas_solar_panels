@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 row justify-content-center"> 
        <user-edit-component :userId="{{id}}"></user-edit-component>
    </div>
</div>
@endsection