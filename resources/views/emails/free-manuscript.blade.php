@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 15px; font-size: 16px; color: #3d4852;">
        From: {{ $name }} {{ $last_name }}<br>
        Email: {{ $email }}<br>
        Words: {{ $word_count }}
    </p>

    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #edf2f7; font-size: 16px; color: #3d4852; line-height: 1.6;">
        {!! $content !!}
    </div>
@endsection
