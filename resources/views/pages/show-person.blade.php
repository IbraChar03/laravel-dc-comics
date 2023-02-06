@extends('layouts.main-layout')
@section('content')
<h1>PERSONS</h1>
<ul>

    <li>
        {{$person -> firstName}} {{$person -> lastName}} <br>
        Date Of Birth : {{$person -> dateOfBirth}} <br>
        Height : {{$person -> height}} cm
    </li>


</ul>
@endsection