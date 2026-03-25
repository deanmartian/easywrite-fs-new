@extends('emails.layouts.master')

@section('preheader', 'Bekräfta din e-postadress')

@section('content')
    @php
        $emailTemplate = AdminHelpers::emailTemplate('Registration Email Confirmation');

        $search = [
            ':first_name',
            '_start_link_',
            '_end_link_',
            '_full_link_'
        ];
        $replace = [
            $user->first_name,
            "<a href='" . $verificationUrl . "' target='_blank' style='display: inline-block; padding: 14px 36px; background-color: #2ab27b; color: #ffffff; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;'>",
            "</a>",
            "<a href='$verificationUrl' style='color: #3097D1;'>$verificationUrl</a>"
        ];
        $email_content = str_replace($search, $replace, $emailTemplate->email_content);
    @endphp

    <div style="font-size: 16px; color: #3d4852; line-height: 1.6;">
        {!! $email_content !!}
    </div>
@endsection
