@extends('admin.layouts.admin')


@section('content')

<h1>Hello is "{{ Auth::user()->name }}" our admin zone.</h1>

@endsection
