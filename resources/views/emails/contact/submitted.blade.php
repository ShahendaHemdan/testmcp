<x-mail::message>
# New Contact Form Submission

**Name:** {{ $name }}
**Email:** {{ $email }}

**Message:**

<x-mail::panel>
{{ $messageContent }}
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> 