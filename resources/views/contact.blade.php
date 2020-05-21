@extends('layouts.app')

@section('content')
    <h1>Contact page using section</h1>

    @if (count($people))

        <ul>

        @foreach($people as $person)

            <li>{{$person}}</li>

        @endforeach

        </ul>

    @endif

@endsection

@section('myjava')
    <script>alert('My alert')</script>
@endsection