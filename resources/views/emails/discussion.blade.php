@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        Hi {{ $email_data['receiver'] }},
    </p>

    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852; line-height: 1.6;">
        {{ $email_data['sender'] }} has posted {{ $email_data['type'] }} titled <a href="{{ $email_data['discussion_url'] }}" style="color: #3097D1;">{{ $email_data['discussion_title'] }}</a> on <a href="{{ $email_data['group_url'] }}" style="color: #3097D1;">{{ $email_data['group_title'] }}</a>.
    </p>
@endsection
