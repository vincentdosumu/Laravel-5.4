@extends('layout.app')

@section('stitle','Songs')

@section('body')
{{'Music you love'}}
@endsection

@section('sub_body')
@foreach ($songs as $song)
{{$song->title}}
@endforeach
@endsection