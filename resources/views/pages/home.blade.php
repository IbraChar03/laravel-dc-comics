@extends('layouts.main-layout')
@section('content')
<h1>PERSONS</h1>
<h2>
    <a href="{{route('person.create')}}">
        CREATE A NEW PERSON </a>
</h2>
<ul>
    @foreach ($persons as $person)
    <li>
        <a href="{{route('person.show',$person)}}">
            {{$person -> firstName}} {{$person -> lastName}} </a>
        <span> - </span>
        <a href="{{route('person.delete',$person)}}">DELETE</a>
    </li>

    @endforeach
</ul>
@endsection