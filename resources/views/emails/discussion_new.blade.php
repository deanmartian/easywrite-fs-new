@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        Hi {{ $receiver }},
    </p>

    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        {{ $sender }} has posted {{ $type }} titled <a href="{{ $discussion_url }}" style="color: #3097D1;">{{ $discussion_title }}</a> on <a href="{{ $group_url }}" style="color: #3097D1;">{{ $group_title }}</a>.
    </p>

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
        <tr>
            <td align="center">
                <a href="{{ $discussion_url }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #3097D1; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;">View Discussion</a>
            </td>
        </tr>
    </table>
@endsection
