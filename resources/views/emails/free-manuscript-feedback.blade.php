@extends('emails.layouts.master')

@section('content')
    <div style="font-size: 16px; color: #3d4852; line-height: 1.6;">
        <?php echo $email_content ?>
    </div>
@endsection
