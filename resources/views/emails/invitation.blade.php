@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        Hi {{ $email_data['receiver'] }},
    </p>

    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        {{ $email_data['sender'] }} has invited you to read "{{ $email_data['book_title'] }}" on Easywrite.
    </p>

    @if($email_data['msg'])
        <div style="margin: 20px 0; padding: 16px 20px; background-color: #f4f5f7; border-radius: 6px; font-size: 15px; color: #3d4852; line-height: 1.6;">
            {{ $email_data['msg'] }}
        </div>
    @endif

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
        <tr>
            <td align="center">
                <a href="{{ route('learner.book-invitation-action',['_token' => $email_data['_token'], 'action' => 1]) }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #2ab27b; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px; margin-right: 10px;">Accept</a>
                <a href="{{ route('learner.book-invitation-action',['_token' => $email_data['_token'], 'action' => 2]) }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: transparent; color: #3097D1; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px; border: 2px solid #3097D1;">Decline</a>
            </td>
        </tr>
    </table>
@endsection
