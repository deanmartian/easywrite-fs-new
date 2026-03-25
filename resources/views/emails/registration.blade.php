@extends('emails.layouts.master')

@section('preheader', 'Välkommen till Easywrite!')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        {!! nl2br(App\Settings::welcomeEmail()) !!}
    </p>

    <!-- CTA Button -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
        <tr>
            <td align="center">
                <a href="{{ $actionUrl }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #3097D1; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;">{{ $actionText }}</a>
            </td>
        </tr>
    </table>

    <p style="margin: 20px 0 0; font-size: 16px; color: #3d4852;">
        Med vänliga hälsningar,<br>Easywrite
    </p>
@endsection
