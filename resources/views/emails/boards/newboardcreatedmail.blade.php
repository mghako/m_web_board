@component('mail::message')
# Admin you have receive new board

## Admins will review it and publish on site asap.

Hey , Thanks for submitting new board to mboard!
Board Title:{{$board->name}}
Board Short Description: {{$board->short_description}}
@component('mail::button', ['url' => 'https://mboard.mghako.com/login'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
