@component('mail::message')
# New Contact Message

**First Name:** {{ $data['first_name'] }} <br>
**Last Name:** {{ $data['last_name'] }} <br>
**Email:** {{ $data['email'] }} <br>
**Subject:** {{ $data['subject'] }}

## Message:
{{ $data['message'] }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
