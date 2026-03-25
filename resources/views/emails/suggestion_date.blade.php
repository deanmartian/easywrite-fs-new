@extends('emails.layouts.master')

@section('content')
    <p style="margin: 0 0 20px; font-size: 16px; color: #3d4852; line-height: 1.6;">
        <strong>{{ $sender }}</strong> suggested new coaching timer dates:
    </p>

    @php
        $suggested_dates = json_decode($suggested_dates);
    @endphp

    <div style="margin: 20px 0; padding: 16px 20px; background-color: #f4f5f7; border-radius: 6px; font-size: 15px; color: #3d4852; line-height: 2;">
        @for($i = 0; $i <= 2; $i++)
            {{ \App\Http\FrontendHelpers::formatToYMDtoPrettyDate($suggested_dates[$i]) }}<br>
        @endfor
    </div>
@endsection
