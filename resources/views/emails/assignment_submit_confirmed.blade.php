@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0; font-size: 16px; color: #3d4852; line-height: 1.6;">
        {{ $email_message }}
    </p>
@endsection
