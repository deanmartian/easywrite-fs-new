@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        Hi {{ $email_data['receiver'] }},
    </p>

    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852; line-height: 1.6;">
        You haven't read <em>{{ $email_data['book_title'] }}</em> in {{ $email_data['days_diff'] }} days.
        {{ $email_data['book_author'] }} is eagerly awaiting your feedback. Ready to jump back in?
    </p>

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
        <tr>
            <td align="center">
                <a href="{{ $email_data['book_link'] }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #3097D1; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;">Start Reading</a>
            </td>
        </tr>
    </table>
@endsection
