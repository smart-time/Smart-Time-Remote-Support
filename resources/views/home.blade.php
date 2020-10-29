@extends('layout.default')

@section('content')
<div id='applications'>
    <a href='/application/takecontrol'><img src='/images/TakeControl.png'></a>
    <div class='sidebyside'>
        <a href='/application/dattowindows'>
            <span class='devicetype'>@lang('lang.for') Windows</span>
            <img src='/images/datto.png'>
        </a>
        <a href='/application/dattomac'>
            <span class='devicetype'>@lang('lang.for') Mac OSX</span>
            <img src='/images/datto.png'>
        </a>
    </div>
</div>
@endsection