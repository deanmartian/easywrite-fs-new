@extends('emails.layouts.master')

@section('content')
    <div style="font-size: 16px; color: #3d4852; line-height: 1.6;">
        {!! $email_message !!}
    </div>
@endsection

@section('tracking')
    <img src="{{ route('front.email-track', $track_code) }}.png" width="1" height="1" alt="">
@endsection
