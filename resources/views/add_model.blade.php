@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 row justify-content-center"> 
        <model-edit-component :isNewModel="true"></model-edit-component>
    </div>
</div>
@endsection