@extends('emails.layouts.master')

@section('preheader', 'Bekräfta din e-postadress')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        Hej {{ $email_data['name'] }},
    </p>

    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852;">
        Det här är ett automatiskt e-postmeddelande från Easywrite för att bekräfta att du äger den här e-postadressen: <strong>{{ $email_data['email'] }}</strong>.
    </p>

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: 30px 0;">
        <tr>
            <td align="center">
                <a href="{{ route('front.email-confirmation', $email_data['token']) }}" target="_blank" style="display: inline-block; padding: 14px 36px; background-color: #3097D1; color: #ffffff; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 15px; font-weight: 600; text-decoration: none; border-radius: 6px;">Klicka här för att bekräfta e-postadressen</a>
            </td>
        </tr>
    </table>

    <p style="margin: 20px 0 0; font-size: 14px; color: #9ba2ab;">
        Om du fick det här meddelandet av misstag kan du bortse från det. Om du har frågor, vänligen kontakta oss via: <strong>post@easywrite.se</strong>.
    </p>
@endsection
