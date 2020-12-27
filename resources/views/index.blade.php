@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    @if(count($todo_items)>0)

    @else
    <h2>Looks like you dont have shit</h2>
    @endif
@endsection
