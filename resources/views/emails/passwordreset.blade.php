@extends('emails.layouts.master')

@section('preheader', 'Återställ ditt lösenord')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        {!! trans('site.password-reset-intro') !!}
    </p>

    @if (isset($actionUrl))
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
            <tr>
                <td align="center">
                    <a href="{{ $actionUrl }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #3097D1; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;">{{ $actionText }}</a>
                </td>
            </tr>
        </table>
    @endif

    <p style="margin: 20px 0 0; font-size: 16px; color: #3d4852;">
        {{ trans('site.password-reset-outro') }}
    </p>

    <p style="margin: 20px 0 0; font-size: 16px; color: #3d4852;">
        {!! trans('site.password-reset-salutation') !!}
    </p>

    @if (isset($actionUrl))
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-top: 25px; padding-top: 25px; border-top: 1px solid #edf2f7;">
            <tr>
                <td>
                    <p style="margin: 0; font-size: 13px; color: #9ba2ab; line-height: 1.5;">
                        {!! trans('site.password-reset-sub-copy') !!}
                    </p>
                    <p style="margin: 5px 0 0; font-size: 13px;">
                        <a href="{{ $actionUrl }}" style="color: #3097D1; word-break: break-all;">{{ $actionUrl }}</a>
                    </p>
                </td>
            </tr>
        </table>
    @endif
@endsection
