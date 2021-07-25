@component('mail::message')
# Introduction

From: {{$contact->full_name}}

E-mail: {{$contact->email}}

The body of your message:

{{$contact->message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
