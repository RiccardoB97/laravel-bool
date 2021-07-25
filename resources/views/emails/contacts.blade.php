@component('mail::message')
# Introduction

The body of your message:

{{$contact->message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
