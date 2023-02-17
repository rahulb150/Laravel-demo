@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src=" {{url('/images/')}}/{{ auth()->user()->profile_pic }}">
                        </div>                   
                        <div class="col-md-8">
                            <div>Name: {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div> 
                            <div>Email: {{ auth()->user()->email }}</div>
                            <div>Hobbies: {{ auth()->user()->hobbies }}</div>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection