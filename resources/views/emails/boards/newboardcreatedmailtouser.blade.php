@component('mail::message')
# Introduction

Hey you have created a board on mboard.app
Admin will review it and publish asap.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
