@component('mail::message')

<p>Hi, This is "<b> {{ $mail_data['name'] }}</b> "</p>
<p>Reply to {{ $mail_data['email'] }}</p>
<p>Contact to {{ $mail_data['phone'] }}</p>
<p>I have some query like "<b> {{ $mail_data['message'] }} </b>"</p>

{{--
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
--}}
Thanks,<br>
{{ $mail_data['name'] }}
@endcomponent
