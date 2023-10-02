@extends('layouts.nf')


@section('master')
                
@if(session()->has('message'))
<div class='links' >
<b>
    {{session('message')}}
</b>
</div>
@endif



@include('components.services')




@include('components.features')



@endsection
