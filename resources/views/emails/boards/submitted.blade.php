@component('mail::message')
# New Board Submitted

Hey , Thanks for submitting new board to mboard!
Board Title: {{ $boardTitle }}
Board Short Description: {{ $boardShortDescription }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
