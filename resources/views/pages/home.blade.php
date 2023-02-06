@extends('layouts.main-layout')
@section('content')
<h1>PERSONS</h1>
<ul>
    @foreach ($persons as $person)
    <li>
        <a href="{{route('person.show',$person)}}">
            {{$person -> firstName}} {{$person -> lastName}} </a>
    </li>

    @endforeach
</ul>
@endsection