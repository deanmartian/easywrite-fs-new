@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        {!! nl2br($email_content) !!}
    </p>

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
        <tr>
            <td align="center">
                <a href="{{ $actionUrl }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #2ab27b; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;">{{ $actionText }}</a>
            </td>
        </tr>
    </table>

    <p style="margin: 20px 0 0; font-size: 16px; color: #3d4852;">
        Med vänliga hälsningar,<br>Easywrite
    </p>
@endsection

@section('tracking')
    <img src="{{ route('front.email-track', $track_code) }}.png" width="1" height="1" alt="">
@endsection
