@extends('layout.default')

@section('content')
<form action="/application/takecontrol" method="POST">
    @csrf
    <input type='text' name='code' placeholder='Vul uw code in'>
    <input type='submit' value='Bevestig'>
</form>
@endsection