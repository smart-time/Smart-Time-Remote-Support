@extends('layout.default')

@section('content')
<form action="/application/takecontrol" method="POST">
    @csrf
    <input type='text' name='code' placeholder="@lang('lang.request_code')">
    <input type='submit' value='@lang('lang.submit')'>
</form>
@endsection